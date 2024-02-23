<?php
require "MainClass.php";
class LevelFirstChildClass extends MainClass
{
    public $levelFirstChildClassProperty;
    public function __construct()
    {
        echo 'Level First Child Class Constructor <br>';
        parent::__construct();
    }
    public function levelFirstChildClassMethod()
    {
        echo "Level First Child Class Method <br>";
        parent::mainClassMethod();
    }
}