<?php

class Bird
{
    public $habitat;
    public $food;
    public $nesting = "tree";
    protected $conservation;
    public static $song = "chirp";
    public static $flying = "yes";
    public static $instanceCount = 0;
    public static $eggNum = 0;

    public function __construct()
    {
        static::$instanceCount++;
    }

    public static function canFly()
    {
        return static::$flying == "yes" ? "can fly" : "is stuck on the ground";
    }

    public static function create()
    {
        return new Bird;
    }
}

class YellowBelliedFlyCatcher extends Bird
{
    public static $name = "yellow-bellied flycatcher";
    public $diet = "mostly insects.";
    public static $song = "flat chilk";
    public static $eggNum = "3-4, sometimes 5";
}

class Kiwi extends Bird
{
    public static $name = "kiwi";
    public $diet = "omnivorous";
    public static $flying = "no";
}
