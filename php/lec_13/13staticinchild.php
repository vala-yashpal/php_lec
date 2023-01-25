<?php

    class staticclassexampleparent{

        public static  $staticdmparent = "static_Dm_parent<br>";
    }

    class staticclassexamplechild extends staticclassexampleparent {

        public static  $staticdmchild = "sattic_Dm_child<br>";

        public static function  functionname(){
            echo "called<br>";
            echo self::$staticdmchild;
            echo parent::$staticdmparent;
            echo self::$staticdmparent;
        }
    }
    echo StaticClassExampleChild::functionname();

    

?>