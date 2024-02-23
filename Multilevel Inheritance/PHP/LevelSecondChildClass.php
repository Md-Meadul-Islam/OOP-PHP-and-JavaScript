<?php
require 'LevelFirstChildClass.php';
class LevelSecondChildClass extends LevelFirstChildClass
{
    public $levelSecondChildClassProperty;
    public function __construct($c = null, $d = null)
    {
        echo 'Level Second Child Class Constructor <br>';
        parent::__construct();
        $this->levelSecondChildClassProperty = $c + $d;
    }
    public function levelSecondChildClassMethod()
    {
        echo "Level Second Child Class Method <br>";
        parent::levelFirstChildClassMethod();
    }
}
$objectSecond = new LevelSecondChildClass(34, 45);
echo $objectSecond->levelSecondChildClassProperty . '<br>';

