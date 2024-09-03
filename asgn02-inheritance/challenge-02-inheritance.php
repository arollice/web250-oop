<?php

class Halloween
{
  var $spooky;

  function isSpooky($spooky)
  {
    if (!$this->spooky) {
      return "Nope, not spooky.";
    } else {
      return "Definitely suuuuper spooky.";
    }
  }
}

class Ghost extends Halloween
{
  var $spooky = True;
  var $name;

  function scareMe()
  {
    return "BOO!";
  }
}

class Candy extends Halloween
{
  var $type;
  var $spooky = False;
  var $treat = True;

  function trickOrTreat($treat)
  {
    echo "<i>\"Trick or treat!\" </i><br />";

    if ($this->treat)
      echo "🍫 (treat) <br />";
    else
      echo "💩 (trick) <br />";
  }
}

$casper = new Ghost;
$casper->name = "Casper";
echo "Name: " . $casper->name . "<br />";
echo "Is it spooky? " . $casper->isSpooky($spooky) . "<br/>";
echo $casper->scareMe() . "<br />";

echo "---------------------- <br />";

$chocolate = new Candy;
$chocolate->type = "Chocolate";
$chocolate->treat = False;
echo " Type of candy: " . $chocolate->type . "<br/>";
echo "Is it spooky? " . $chocolate->isSpooky($spooky) . "<br/>";
echo $chocolate->trickOrTreat($treat);
