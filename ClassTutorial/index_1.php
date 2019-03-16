<?php

class Family
{
    private $lastName = 'ภูศรี';
    private $dadName = "Dad Name";
    private $momName = "Mom Name";

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getDadName() {
        return $this->dadName;
    }

    public function getMomName() {
        return $this->momName;
    }

}

class Son extends Family
{
    private $firstName;
    private $nickName;

    function __construct($firstName, $niceName)
    {
        $this->firstName = $firstName;
        $this->nickName = $niceName;
    }

    function getFullName()
    {
        return "สวัสดีคุณ " . $this->firstName . " " . parent::getLastName() . ", ชื่อเล่น " . $this->nickName;
    }

}

$son1 = new Son('วิสิฐ', 'เพชร');
echo $son1->getFullName();
echo $son1->getMomName();