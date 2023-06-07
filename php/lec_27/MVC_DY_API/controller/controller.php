<?php
    session_start();
    require_once("model/model.php");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    class controller extends model{
        public $base_url = "";
        public function __construct(){
            ob_start();
            parent::__construct();

            $reqURIdata = explode("/",$_SERVER['REQUEST_URI']);  // array cut
            $this->base_url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/".$reqURIdata[1]."/".$reqURIdata[2]."/".$reqURIdata[3]."/".$reqURIdata[4]."/assets/";
            
            

            if(!isset($_SERVER["PATH_INFO"]))
            {
                $_SERVER["PATH_INFO"]='/register';
            }
            if(isset($_SERVER["PATH_INFO"])){


            
                switch ($_SERVER["PATH_INFO"]){
                
                    case '/home':
                        include_once("views/headerr.php");
                        include_once("views/main.php");
                        include_once("views/footer.php");
                    break;

                    case '/session':
                        $user_data = json_decode(file_get_contents('php://input'));
                        $user = $user_data['0'];

                        // echo "<pre>";
                        // print_r($user);
                        // echo "</pre>";
                        // exit;

                        $_SESSION['userdata'] = $user;
                        // echo "<pre>";
                        // print_r($_SESSION['userdata']->user_name);
                        // echo "</pre>";
                        // exit;

                        if(isset($_SESSION['userdata'])){
                            echo json_encode("true");
                        }else{
                            echo json_encode("false");
                        }
                    break;


                    case '/logout':
                        session_unset();
                        session_destroy();
                        header("location:register");
                    break;
            
                    case '/userproduct':

                        $allproduct_user = $this->select('product1_data');

                        if(count($allproduct_user['Data']) > 0){
                            $where="";
                            $limit = 4;

                            if(isset($_GET['page'])){
                                $page = $_GET['page'];
                            }else{
                                $page = 1;
                            }
                            
                            $offfset = ($page- 1) * $limit;
    
                            $limit_product_user=$this->select('product1_data',$where, $offfset,$limit);
                        }

                        // echo "<pre>";
                        // print_r($allproduct_user['Data']);
                        // echo "</pre>";
                        // exit;

                        include_once("views/headerr.php");
                        include_once("views/user_product.php");
                        include_once("views/footer.php");
                    break;

                    
                    case '/about':
                        include_once("views/headerr.php");
                        include_once("views/about.php");
                        include_once("views/footer.php");
                    break;

        
                    case '/courses':
                        include_once("views/headerr.php");
                        include_once("views/courses.php");
                        include_once("views/footer.php");
                    break;
                        
                
                    case '/contact':
                        include_once("views/headerr.php");
                        include_once("views/contact.php");
                        include_once("views/footer.php");
                    break;

                    
                    case '/feature':
                        include_once("views/headerr.php");
                        include_once("views/features.php");
                        include_once("views/footer.php");
                    break;

                    
                    case '/appointment':
                        include_once("views/headerr.php");
                        include_once("views/appointment.php");
                        include_once("views/footer.php");
                    break;

                    case '/team':
                        include_once("views/headerr.php");
                        include_once("views/team.php");
                        include_once("views/footer.php");
                    break;

                    
                    case '/testimonial':
                        include_once("views/headerr.php");
                        include_once("views/testimonial.php");
                        include_once("views/footer.php");
                    break;

                    case '/register':
                        
                        // if(isset($_POST['register'])){
                        //     array_pop($_POST);
                            
                        //     $result = $this->insert('register',$_POST);
                        //     // print_r($result);
                        //     $this->SendEmail($_POST['email'], "Register Success drivin school_local");
                        //     if($result['Code'] == 1){
                                
                        //         echo  '<script>
                        //         alert("registration success")
                        //         window.location.href="login"
                        //         </script>';
                                
                        //     }else{
                        //         echo  '<script>alert("erroer while inserting ")</script>';
                        //     }
                        // }
                        include_once("views/register.php");
                        include_once("views/footer.php");

                    break;
                        
                    case '/login':
                        // if(isset($_POST['login'])){

                        //     $result = $this->login($_POST['user_n_m_e'],$_POST['password']);
                            
                        //     if($result['Code'] == 1){
                                
                        //         $_SESSION['userdata'] = $result['Data'][0];

                        //         // echo "<pre>";
                        //         // print_r($_SESSION['userdata']);

                        //         if(isset($result['Data'][0])){

                        //             if($result['Data'][0]->id == 1){

                        //                 header("location:admindashboard");
                        //             }else{
                        //                 header("location:home");
                        //             }

                        //         }else{
                        //             header("location:login");
                        //         }
                        //     }else{
                        //         echo '<script>alert("Invalid User")</script>';
                        //     }
                        // }
                        include_once("views/login.php");
                        include_once("views/footer.php");
                    break;
                    
                    case '/forgotpasslink':
                        include_once("views/forgotpasslink.php");
                        include_once("views/footer.php");
                    break;

                    case '/forgotpass':
                        include_once("views/forgotpass.php");
                        include_once("views/footer.php");
                    break;

                    case '/admindashboard':

                        $Allusers = $this->select('register');
                        // $_SESSION['admin'] = $Allusers['Data'][0];

                        include_once("views/admin/adminheader.php");
                        include_once("views/admin/admindashbord.php");
                        include_once("views/admin/adminfooter.php");
                    break;

                    case '/allusers':
                        $Allusers = $this->select('register');

                        if(isset($_POST['search'])){
                            $search_data = array("id"=>$_POST['search_value'],"user_name"=>$_POST['search_value'],"email"=>$_POST['search_value'],"contact_number"=>$_POST['search_value'],"date_of_birth"=>$_POST['search_value']);

                            $search_result = $this->search('register',$search_data);
                        }
                        include_once("views/admin/adminheader.php");
                        include_once("views/admin/Listallusers.php");
                        include_once("views/admin/adminfooter.php");
                    break;

                    case '/newuseradd':
                        if(isset($_POST['adminadd'])){

                            $hobby =implode(",",$_POST['hobby']);
                            array_pop($_POST);
                            unset($_POST['hobby']);
                            $postdata = array_merge($_POST,array("hobby"=>$hobby));
                            // dd($postdata);
                            // exit;
                            $result = $this->insert('register',$postdata);
                            // print_r($result);
                            
                            if($result['Code'] == 1){
                                
                                echo  '<script>alert("user added success")</script>';
                                header("location:allusers");
                                
                            }else{
                                echo  '<script>alert("erroer while inserting ")</script>';
                            }
                        }
                        include_once("views/admin/adminheader.php");
                        include_once("views/admin/newuseradd.php");
                        include_once("views/admin/adminfooter.php");
                    break;

                    case '/edituser':

                        $userdatabyid = $this->select('register',array("id"=>$_REQUEST['userid']));
    
                        if(isset($_POST['Update'])){

                            if($_FILES['item_image']['error'] == 0){

                                $fileName = $_FILES['item_image']['name'];

                                if(move_uploaded_file($_FILES['item_image']['tmp_name'], "uploads/$fileName")){

                                    echo "<script> alert('image uploading successfully'); </script>";
                                }else{

                                    echo "<script>alert('image uploading error')</script>";
                                }

                            }else{
                                $fileName = $_POST['item_image_old'];
                            }
                       

                            $img = $fileName;

                            $hobby =implode(",",$_POST['hobby']);
                            
                            $post_data = array("user_name"=>$_POST['user_name'],"email"=>$_POST['email'],"contact_number"=>$_POST['contact_number'],"date_of_birth"=>$_POST['date_of_birth'],"gender"=>$_POST['gender'],"hobby"=>$hobby,"prof_img"=>$img);
                    
                            $updateusers = $this->update('register',$post_data,array("id"=>$_REQUEST['userid']));

                            if($updateusers["Code"] == 1){
                                echo '<script> 
                                        alert("update data success") 
                                        window.location.href="allusers"
                                    </script>';
                            }else{
                                echo "<script>alert('try after some time')</script>";
                            }
                        }
                        
                        include_once("views/admin/adminheader.php");
                        include_once("views/admin/updateuser.php");
                        include_once("views/admin/adminfooter.php");
                    break;

                    case '/deleteuser':
                        
                        $deleteusers = $this->delete('register',$_REQUEST);
                        if($deleteusers['Code'] == 1){
                                
                            echo  '<script>
                            alert("Delete User successfuly")
                            window.location.href="allusers"
                            </script>';
                            // header("location:allusers");
                            
                            
                        }else{
                            echo  '<script>alert("erroer while deleting ")</script>';

                        }
                    break;
                    
                    case '/allproduct':

                        $allproduct = $this->select('product1_data');
                        
                        // echo "<pre>";
                        // print_r($allproduct['Data']);
                        // exit;  

                        include_once("views/admin/adminheader.php");
                        include_once("views/admin/admin_product.php");
                        include_once("views/admin/adminfooter.php");
                    break;

                    case '/add_product':

                        if(isset($_POST['add_item'])){

                            $fileName = $_FILES['item_image']['name'];

                            if(move_uploaded_file($_FILES['item_image']['tmp_name'], "uploads/$fileName")){
                                
                                $img = $fileName;
                                array_pop($_POST);

                                $postdata = array_merge($_POST,array("item_image"=>$img));
                                // dd($postdata);
                                // exit;
                                $result = $this->insert('product1_data',$postdata);
                                
                                if($result['Code'] == 1){
                                    
                                    echo  '<script>alert("iteam added success")</script>';
                                    header("location:allproduct");
                                    
                                }else{
                                    echo  '<script>alert("erroer while inserting ")</script>';
                                }
                            }else{
                                echo "there is some error while file uploading";
                            }
                            
                            exit;
                           
                        }

                        include_once("views/admin/adminheader.php");
                        include_once("views/admin/add_product.php");
                        include_once("views/admin/adminfooter.php");
                    break;

                    case '/editproduct':

                        $item_id = array("item_id"=>$_REQUEST['item_id']);

                        $productdatabyid = $this->select('product1_data',$item_id);

                        include_once("views/admin/adminheader.php");
                        include_once("views/admin/update_product.php");
                        include_once("views/admin/adminfooter.php");

                        if(isset($_POST['update_item'])){
                            // $hobby =implode(",",$_POST['hobby']);
                                // array_pop($_POST);
                                // unset($_POST['hobby']);
                                // $postdata = array_merge($_POST,array("hobby"=>$hobby));
                                // dd($postdata);
                                // exit;

                            $post_dataitem = array("item_name"=>$_POST['item_name'],"item_price"=>$_POST['item_price'],"item_desc"=>$_POST['item_desc']);
                           
                            $update_item = $this->update('product1_data',$post_dataitem,$item_id);
                            
                            if($update_item["Code"] == 1){
                                echo '<script> 
                                        alert("update item success") 
                                        window.location.href="allproduct"
                                    </script>';
                            }else{
                                echo "<script>alert('try after some time')</script>";
                            }
                        }
                    break;

                    case '/deleteproduct':

                        $item_id = $_REQUEST;

                        $deleteitem = $this->delete('product1_data',$item_id);

                        if($deleteitem['Code'] == 1){
                                
                            echo  '<script>
                            alert("Delete User successfuly")
                            window.location.href="allproduct"
                            </script>';
                        }else{
                            echo  '<script>alert("erroer while deleting ")</script>';
                        }
                    break;

                    case '/ajaxtodo':
                        include_once("views/admin/adminheader.php");
                        include_once("views/admin/ajaxtodo.php");
                        include_once("views/admin/adminfooter.php");
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
        
        public function SendEmail($email, $msg){
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
            $mail->Body    = $bodyContent;
            $mail->Subject = 'Email from Localhost by yashpal';
            if (!$mail->send()) {
                echo 'Mailer error: ' . $mail->ErrorInfo;
            } else {
                echo "Message has been sent";
            }

        }
    }  

    $controller = new controller;
?>

