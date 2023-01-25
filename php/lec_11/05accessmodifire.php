<?php

class AccessModi{
    public $PublicDm = "PublicDm"; 
    private $PrivateDm = "PrivateDm"; 
    protected $ProtectedDm = "ProtectedDm"; 
    public function AccessDMSelf(){
        echo "AccessDMSelf<br>";
        echo "<br> Public in AccessDMSelf".$this->PublicDm ."<br>";
        echo "<br> ProtectedDm in AccessDMSelf".$this->ProtectedDm ."<br>";
        echo "<br> PrivateDm in AccessDMSelf".$this->PrivateDm ."<br>";
    }
}
class AccessModiChild extends AccessModi{
    public function AccessDM(){
        echo "AccessDM called<br>";
        echo "<br> Public in child".$this->PublicDm ."<br>";
        echo "<br> ProtectedDm in child ".$this->ProtectedDm ."<br>";
        // echo "<br> PrivateDm ".$this->PrivateDm ."<br>";
    }
}
$ObjectOfAccessModi = new AccessModiChild;
echo $ObjectOfAccessModi->AccessDM();
echo $ObjectOfAccessModi->PublicDm;
echo $ObjectOfAccessModi->AccessDMSelf();
// $ObjectOfAccessModi->PrivateDm;
// $ObjectOfAccessModi->ProtectedDm;


?>