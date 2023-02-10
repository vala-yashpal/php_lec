<?php
    date_default_timezone_set("Asia/Kolkata");

    function dd($a){
        echo "<pre>";
        print_r($a);
        echo "<pre>";    
    }


   class model {

        // $connection = new mysqli("localhost","root","","record");
        // public $connection = new mysqli("localhost","root","","record"); new xpression are not supported in this  contex
        public $connection="";
        
        public function __construct(){
            // $this->connection = new mysqli("localhost","root","","rcord");
            try {

                $this->connection = new mysqli("localhost","root","","z_drivin");
                // echo "connection successfully <br><br>";

            }catch(Exception $e) {
                // dd($e->getMessage());

                if(!file_exists("log")){
                    mkdir("log");
                }
                $file_name = "log/error_log_".date('d_m_Y').".txt";
                $errormess = PHP_EOL."error message >> ".$e->getMessage().PHP_EOL;
                echo $errormess;
                $errormess .= "error datetime >> ".date("d-M-Y H:i:s A").PHP_EOL;
                $errormess .= ">> =============================================== <<".PHP_EOL;
                file_put_contents($file_name,$errormess ,FILE_APPEND);
                die;
            }
            // dd($this->connection);
        }

        // public function select($tbl){
        //     $sql = "SELECT * FROM $tbl";
        // }

        public function insert($tbl,$data){
            $column = implode(",",array_keys($data));
            // dd($column);
            // exit;
            $values = implode("','",$data);
            // dd($tbl);
            // dd($column);
            // dd($data);
            $sql = "INSERT INTO $tbl ($column) values ('$values')";
            // $queryex=$this->connection->query("INSERT INTO $tbl ($column) values ('$values')");  //right
            try{
                $query_execute = $this->connection->query($sql);
            }catch(Exception $e){
                if(!file_exists("log")){
                    mkdir("log");
                }
                $file_name = "log/error_log_".date("d_m_Y").".txt";
                $errormess = PHP_EOL."error_message >> ".$e->getMessage().PHP_EOL;
                echo $errormess;
                $errormess .= "error_datetime >> ".date("d-M-Y H:i:s A").PHP_EOL;
                $errormess .= ">>===============================================<<".PHP_EOL;
                file_put_contents($file_name,$errormess,FILE_APPEND);
                exit;
            }

            // if($query_execute > 0){
            //     echo "deta inserted";
            // }else{
            //     echo "error while inserting";
            // }

            if($query_execute > 0){
                $Response['Code'] = 1;
                $Response['Data'] = 1;
                $Response['Msg'] = "Success";
            }else{
                $Response['Code'] = 0;
                $Response['Data'] = 0;
                $Response['Msg'] = "try agin";
            }
            return $Response;
        }

        // public function update(){}
        // public function delete(){}
    }   
        // $model = new model;

        // $model->select('student');
     
        // $model->insert('country',array("country_title"=>"test" ));
        // $model->insert('state',array("state_title"=>"test","countryid"=>"1"));
        // $model->insert('user_det',array("first_name" => "vala","last_name" => "yashpal","email"=> "vala1@gmail.com","f_password" => "1234","l_password" => "1234","age" =>"23","Dob" => "2000-06-12","city" => "somnath(gir)","gender" => "male"));
    

?>