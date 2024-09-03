<?php

// Bird Class
class Bird
{
  var $common_name;
  var $food;
  var $nest_placement;
  var $conservation_level;

  function song($lyrics)
  {
    echo "Song: " . $lyrics;
  }

  function can_fly()
  {
    return "The " . $this->common_name . " bird can fly.";
  }
}

$bird1 = new Bird;
$bird1->common_name = "Woodstock";
$bird1->food = "Popcorn & jelly beans";
$bird1->nest_placement = "Snoopy's house";
$bird1->conservation_level = "High";

//Output for Bird 1

echo "Common Name: " . $bird1->common_name . "<br/>";
echo "Food: " . $bird1->food . "<br/>";
echo "Nest Placement: " . $bird1->nest_placement . "<br/>";
echo "Conservation Level: " . $bird1->conservation_level . "<br/>";
echo "Ability to fly: " . $bird1->can_fly() . "<br/>";
echo $bird1->song("Little birdie why do you fly upside down?") . "<br/>";

echo "------------------- <br />";

//Output for Bird2

$bird2 = new Bird;
$bird2->common_name = "Toucan Sam";
$bird2->food = "Fruit loops";
$bird2->nest_placement = "On your cereal box";
$bird2->conservation_level = "High";

echo "Common Name: " . $bird2->common_name . "<br/>";
echo "Food: " . $bird2->food . "<br/>";
echo "Nest Placement: " . $bird2->nest_placement . "<br/>";
echo "Conservation Level: " . $bird2->conservation_level . "<br/>";
echo "Ability to fly: " . $bird2->can_fly() . "<br/>";
echo $bird2->song("Follow your noooose!") . "<br/>";
