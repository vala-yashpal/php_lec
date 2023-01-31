<?php

trait ABC{
    public function traitABCFun(){
        echo "called";
    }
}
trait ABCD{
    public function traitABCFun1(){
        echo "called";
    }
}

class XYZ{
    use ABC;
    use ABCD;
    public function FunctionName(){
        $this->traitABCFun();
        $this->traitABCFun1();
    }
}

$ob = new XYZ;
$ob->FunctionName();

?>