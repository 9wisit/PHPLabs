<?php

class Family 
{ 
    private $lastName = 'Phusi';

    public function getLastName() {
        return $this->lastName;
    }

}

class Member extends Family
{
    private $firstName;
    private $niceName;

    public function __construct($firstName, $niceName) {
        $this->firstName = $firstName;
        $this->niceName = $niceName;
    }

    public function getFullName() {
        $lastName = parent::getLastName();
        return "
            Wellcome {$this->firstName} {$lastName}, 
            Your nice name is {$this->niceName}.
        ";
    }

}

$family = new Family();
echo $family->getLastName();
echo '</br>';

// แสดงชื่อ Member
$member = new Member('Wisit', 'Petch');
echo $member->getFullName();

echo '</br>';
// แสดงชื่อ Member
$member = new Member('Wisit 2', 'Petch');
echo $member->getFullName();