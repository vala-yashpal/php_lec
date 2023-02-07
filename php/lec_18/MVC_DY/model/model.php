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

                $this->connection = new mysqli("locahost","root","","record");

            } catch (Exception $e) {
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
                exit;
            }
        }

        public function select($tbl){
            $query = "SELECT * FROM $tbl";
        }

        public function insert(){}
        public function update(){}
        public function delete(){}
   }

   $obj = new model;
   $obj->select('student');

?>