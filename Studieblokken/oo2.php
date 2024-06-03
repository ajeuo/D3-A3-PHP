<?php
class User{
public $last;
public $Date;


public function setLastname($Achternaam){

    $this->Last = $Achternaam;
}
public function setBirthdate($Birthdate){

    $this->Date = $Birthdate;
}

public function getLastname(){
    return $this->Last;
}
public function getBirthdate(){
    return $this->Date;
}
}


$user = new User();

$user->setLastname("de Roode <br>");
$user->setBirthdate("16-06-2006");

echo $user->getLastname();
echo $user->getBirthdate();

?>
