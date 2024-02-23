<?php
require 'ParentClass.php';
require 'Traits/FirstTraits.php';
require 'Traits/SecondTraits.php';
class ExtendedClass extends ParentClass
{
    use FirstTraits, SecondTraits;
    public $extendedClassProperty;
    public function __construct()
    {
        echo "Extended Class Constructor <br>";
        parent::__construct();
        echo "<br>";
        //you cannot use FirstTraits and SecondTraits constructor in ExtendedClass Constructor;
    }
    public function extendedClassMethod()
    {
        echo 'Extended Class Method <br>';
        parent::parentClassMethod();
        echo "<br>";
        self::firstTraitsMethod();
        echo "<br>";
    }
}
$Obj = new ExtendedClass();
echo $Obj->extendedClassMethod();
echo "<br>";
echo $Obj->firstTraitsMethod();
echo "<br>";
echo $Obj->secondTraitsMethod();