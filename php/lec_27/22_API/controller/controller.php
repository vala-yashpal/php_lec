<?php

   header("Access-Control-Allow-Origin: *");

    require_once("model/model.php");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    class controller extends model{
        public $base_url = "";
        public $method = "";

        public function __construct(){
            
            parent::__construct();

            $this->method = $_SERVER['REQUEST_METHOD'];


            ob_start();
            $reqURIdata = explode("/",$_SERVER['REQUEST_URI']);  // array cut
            $this->base_url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/".$reqURIdata[1]."/".$reqURIdata[2]."/".$reqURIdata[3]."/".$reqURIdata[4]."/assets/"; 
            // echo "<pre>";
            // print_r($_SERVER);
            // echo "</pre>";
            // exit;

            if(isset($_SERVER["PATH_INFO"])){

                switch ($_SERVER["PATH_INFO"]){

                    case '/home':
                        echo "<h2>welcome to our api success</h2>";
                    break;

                    case '/register':

                        $data = json_decode(file_get_contents('php://input') );
                        $array = (array) $data;

                        $ragister_user = $this->insert("register",$array);

                        echo json_encode($ragister_user);
                    break;

                    case '/resetpassword':

                        $data = json_decode(file_get_contents('php://input') );
                        $array = (array) $data;
                        $email = $array['email'];
                        $Result = $this->select('register',$array);

                        if($Result['Code'] == 1){
                            $respass_uid = $Result['Data'][0]->id;
                            
                            $this->SendEmail($email, "reset your password click link",$respass_uid);
                        }

                        echo json_encode($Result);
                    break;

                        
                    case '/updatepassword':

                        $data = json_decode(file_get_contents('php://input') );

                        $id=$_REQUEST;

                        $array = (array) $data;

                        $update_pass = $this->update("register",$array,$id);

                        echo json_encode($update_pass);
                    break;

                    case '/login':

                        $data = json_decode(file_get_contents('php://input') );
                        $array = (array) $data;

                        $result = $this->login($array['user_n_m_e'],$array['password']);
                
                        echo json_encode($result);
                    break;

                    case '/uploadimg':
                        if ($this->method == 'POST') {
                            $data = json_decode(file_get_contents('php://input') );
                            // print_r($data);
                            // print_r($_REQUEST);
                            // print_r($_FILES);
                            $fileName = $_FILES['profile_pic']['name'];
                            $ext = pathinfo($fileName,PATHINFO_EXTENSION);
                            $NewFileName = $_FILES['profile_pic']['name'].time().".".$ext;
                            move_uploaded_file($_FILES['profile_pic']['tmp_name'],"uploads/$NewFileName");
                            $result['Code'] = 1;
                            $result['Data'] = array("filename"=>$NewFileName);
                            $result['Msg'] = "Success";
                        }else {
                            $result['Code'] = 0;
                            $result['Data'] = 0;
                            $result['Msg'] = "invalid method";
                        }
                        echo json_encode($result);
                    break;
                
                    case '/select':
                        $result = $this->select('register');
                        echo json_encode($result);
                        // echo "<pre>";
                        // print_r($result);
                    break;
                        
                    case '/alltododata':
                        $Result = $this->select('todo');
                        echo json_encode($Result);
                        // echo "<pre>";
                        // print_r($Result);
                    break;

                    case '/inserttodo':
                        $data = json_decode(file_get_contents('php://input') );

                        $array = (array) $data;

                        $insetrtodo = $this->insert("todo",$array);

                        echo json_encode($insetrtodo);

                        // echo "<pre>";
                        // print_r($Result);
                    break;

                    case '/updatetodo':

                        $data = json_decode(file_get_contents('php://input') );
                        
                        $id=$_REQUEST;

                        $array = (array) $data;

                        $updatetodo = $this->update("todo",$array,$id);

                        echo json_encode($updatetodo);

                        // echo "<pre>";
                        // print_r($Result);
                    break;

                    case '/delettodo':
                        $id=$_REQUEST;

                        $deletetodo = $this->delete("todo",$id);
                        
                        echo json_encode($deletetodo);

                        // echo "<pre>";
                        // print_r($Result);
                    break;

                    case '/getdatabyid':
                        $Result = $this->select('todo',array("id"=>$_REQUEST['id']));
                        echo json_encode($Result);
                        // echo "<pre>";
                        // print_r($Result);
                    break;
        
                    default:
                        include_once("views/headerr.php");
                        include_once("views/404.php");
                        include_once("views/footer.php");
                    break;
                }
            }else{
                header("location:home");
            }
            ob_flush(); 
        }

        public function SendEmail($email, $msg,$respass_uid){
            $mail = new PHPMailer(true);
            // $OTP = rand(1000, 9999);
            $mail->isSMTP();                                // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                       // Enable SMTP authentication
            $mail->Username   = 'yashpaltest@gmail.com'; //SMTP username
            $mail->Password   = 'efdhvamrzaaekclz';     // your password 2step varified 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
            $mail->setFrom('yashpaltest@gmail.com', 'yashpal vala');
            $mail->addAddress($email);   // Add a recipient
            $mail->isHTML(true);  // Set email format to HTML

            $bodyContent = "<h1>HeY!,</h1>";
            $bodyContent .= '<p>This is a email that</p>' . $msg;
            $bodyContent .= '<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
            style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: Open Sans, sans-serif;">
            <tr>
                <td>
                    <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                        align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="height:80px;">&nbsp;</td>
                        </tr>
                        
                        <tr>
                            <td style="height:20px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                    style="max-width:670px;background:#0c2b4b;  border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                    <tr>
                                        <td style="height:40px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:0 35px;">
                                            <h1 style="color:#f3f6f8; font-weight:500; margin:0;font-size:32px;font-family:Rubik,sans-serif;">You have
                                                requested to reset your password</h1>
                                            <span
                                                style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                            <p style="color:#f3f6f8; font-size:15px;line-height:24px; margin:0;">
                                                We cannot simply send you your old password. A unique link to reset your
                                                password has been generated for you. To reset your password, click the
                                                following link and follow the instructions.
                                            </p>
                                            <a href="http://localhost/php_lec_tops/php/lec_27/MVC_DY_API/forgotpasslink?id='.$respass_uid.'"
                                                style="background:#f3bd00;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;">Reset
                                                Password</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height:40px;">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="height:20px;">&nbsp;</td>
                        </tr>
                        <!-- <tr>
                            <td style="text-align:center;">
                                <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong>www.rakeshmandal.com</strong></p>
                            </td>
                        </tr> -->
                        <tr>
                            <td style="height:80px;">&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>';
            $mail->Body    = $bodyContent;
            $mail->Subject = 'Email from Localhost by yashpal';
            if (!$mail->send()) {
                // echo '<script>alert("Message was not sent.");</script>';
                echo 'Mailer error: ' . $mail->ErrorInfo;
            } else {
                // echo '<script>alert("Message has been sent");</script>';
            }

        }
    }

    $controller = new controller;
?>

