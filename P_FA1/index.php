<?php

class Phone{
    private bool $hasBattery;
    private string $nameOfOwner;
    private int $phoneNumber;

    public function displayInfo(){
        echo "This phone has battery: ". (true === (bool)$this->hasBattery ? 'True' : 'False') . "<br>Owner: " . 
        $this->nameOfOwner . "<br>Phone#:" . $this->phoneNumber;
    }

    public function setHasBattery($hasBattery){
        $this->hasBattery = $hasBattery;
     }
     public function getHasBattery(){
        return $this->hasBattery;
     }

     public function setNameOfOwner($nameOfOwner){
        $this->nameOfOwner = $nameOfOwner;
     }
     public function getNameOfOwner(){
        return $this->nameOfOwner;
     }

     public function setPhoneNumber($phoneNumber){
        $this->phoneNumber = $phoneNumber;
     }
     public function getPhoneNumber(){
        return $this->phoneNumber;
     }
}

class SailfishOS extends Phone{
    private bool $isOpenSource;

    function __construct($parameter){
        $this->setIsOpenSource($parameter);
    }
    public function setIsOpenSource($isOpenSource){
        $this->isOpenSource = $isOpenSource;
     }
    public function getIsOpenSource(){
        return $this->isOpenSource;
     }
    public function printInfo(){
        echo "<br>OS is open source: ". (true === (bool)$this->getIsOpenSource()?'True' : 'False')."";
     }
    public function displayInfo(){
        echo "<br>SAILFISH OS PHONE"."<br>This phone has battery: ". (true === (bool)$this->getHasBattery() ? 'True' : 'False') . "<br>Owner: " . 
        $this->getNameOfOwner() . "<br>Phone#:" . $this->getPhoneNumber();
    }
}
class Android extends Phone {
    public function displayInfo(){
        echo "<br><br>ANDROID PHONE"."<br>This phone has battery: ". (true === (bool)$this->getHasBattery() ? 'True' : 'False') 
        . "<br>Owner: " . 
        $this->getNameOfOwner() . "<br>Phone#:" . $this->getPhoneNumber();
    }
    public function setIsOpenSource($isOpenSource){
        $this->isOpenSource = $isOpenSource;
     }
    public function getIsOpenSource(){
        return $this->isOpenSource;
     }
}
class IOS extends Phone {
    public function displayInfo(){
        echo "<br><br>IOS PHONE"."<br>This phone has battery: ". (true === (bool)$this->getHasBattery() ? 'True' : 'False') 
        . "<br>Owner: " . 
        $this->getNameOfOwner() . "<br>Phone#:" . $this->getPhoneNumber();
    }
    public function setIsOpenSource($isOpenSource){
        $this->isOpenSource = $isOpenSource;
     }
    public function getIsOpenSource(){
        return $this->isOpenSource;
     }
}
class Samsung extends Android{
    public function displayInfo(){
        echo "<br><br>SAMSUNG: ANDROID PHONE"."<br>This phone has battery: ". (true === (bool)$this->getHasBattery() ? 'True' : 'False') . "<br>Owner: " . 
        $this->getNameOfOwner() . "<br>Phone#:" . $this->getPhoneNumber().
        "<br>OS is open source: ". (true === (bool)$this->getIsOpenSource()?'True' : 'False')."";;
    }
}
class Apple extends IOS{
    public function displayInfo(){
        echo "<br><br>APPLE: IOS PHONE"."<br>This phone has battery: ". (true === (bool)$this->getHasBattery() ? 'True' : 'False') 
        . "<br>Owner: " . 
        $this->getNameOfOwner() . "<br>Phone#:" . $this->getPhoneNumber().
         "<br>OS is open source: ". (true === (bool)$this->getIsOpenSource()?'True' : 'False')."";;
    }
}

$phone1 = new SailfishOS(true);
$phone1->setHasBattery(true);
$phone1->setNameOfOwner("Jean");
$phone1->setPhoneNumber(84311512711);
$phone1->displayInfo();
$phone1->printInfo();

$phone2 = new Samsung();
$phone2->setHasBattery(true);
$phone2->setNameOfOwner("John");
$phone2->setPhoneNumber(67348123513);
$phone2->setIsOpenSource(true);
$phone2->displayInfo();

$phone3 = new Apple();
$phone3->setHasBattery(true);
$phone3->setNameOfOwner("Jack");
$phone3->setPhoneNumber(81247345681);
$phone3->setIsOpenSource(false);
$phone3->displayInfo();
?>