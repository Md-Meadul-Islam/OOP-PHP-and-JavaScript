<?php
trait SecondTraits
{
    public $secondTraitsProperty;
    public function __construct()
    {
        echo "Second Traits Constructor";
    }
    public function secondTraitsMethod()
    {
        echo "Second Traits Method";
    }
}