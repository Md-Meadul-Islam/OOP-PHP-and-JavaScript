<?php
require 'LevelSecondChildClass.php';
class LevelThirdChildClass extends LevelSecondChildClass
{
    public $levelThirdChildClassProperty;

    public function __construct($a, $b)
    {
        echo 'Level Third Child Class Constructor <br>';
        parent::__construct();
        $this->levelThirdChildClassProperty = $a * $b;
    }
    public function levelThirdChildClassMethod()
    {
        echo "Level Third Child Class Method <br>";
        parent::levelSecondChildClassMethod();
    }
}
$obj = new LevelThirdChildClass(20, 30);
echo $obj->levelThirdChildClassProperty . '<br>';
$obj->levelThirdChildClassMethod();