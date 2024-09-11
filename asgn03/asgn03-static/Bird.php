<?php

class Bird
{
    public $habitat;
    public $food;
    public $nesting = "tree";
    protected $conservation;
    public $song = "chirp";
    public $flying = "yes";
    public static $instanceCount;
    public static $eggNum = 0;

    function canFly()
    {

        return $this->flying == "yes" ? "can fly" : "is stuck on the ground";
    }


    public static function create()
    {
        return new Bird;
    }
}

class YellowBelliedFlyCatcher extends Bird
{
    public $name = "yellow-bellied flycatcher";
    public $diet = "mostly insects.";
    public $song = "flat chilk";
    public static $eggNum = "3-4, sometimes 5";
}

class Kiwi extends Bird
{
    public $name = "kiwi";
    public $diet = "omnivorous";
    public $flying = "no";
}
