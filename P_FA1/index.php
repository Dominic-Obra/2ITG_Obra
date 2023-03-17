<?php

class nameOfClass{
    private $memberA;
    private string $memberB;
    private int $memberC;

    public function displayInfo(){
        echo $memberA . " " . $memberB . " " . $memberC;
    }

    public function setMemberA($memberA){
        $this->memberA = $memberA;
     }
     public function getMemberA(){
        return $this->memberA;
     }

     public function setMemberB($memberB){
        $this->memberB = $memberB;
     }
     public function getMemberB(){
        return $this->memberB;
     }

     public function setMemberC($memberC){
        $this->memberC = $memberC;
     }
     public function getMemberC(){
        return $this->memberC;
     }
}

$sampleObject = new nameOfClass();
$sampleObject->setMemberA("Hello");
$sampleVar = $sampleObject->getMemberA();

echo $sampleVar;

?>