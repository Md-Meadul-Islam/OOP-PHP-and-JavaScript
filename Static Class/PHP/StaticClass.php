<?php

class StaticClass
{
    public static $staticProperty;
    public $normalProperty;
    public function __construct(string $normalVal, string $staticVal)
    {
        self::$staticProperty = $staticVal;
        $this->normalProperty = $normalVal;
    }
    public function normalMethod()
    {
        return self::$staticProperty . '<br>' . $this->normalProperty . '<br>';
    }
    public static function staticMethod(StaticClass $instance)
    {
        return self::$staticProperty . '<br>' . $instance->normalProperty . '<br>';
    }
}
$obj = new StaticClass('normal', 'static');

echo $obj->normalMethod() . '<br>';
echo StaticClass::staticMethod($obj);