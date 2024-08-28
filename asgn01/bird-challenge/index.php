<?php

class Bird
{
  var $common_name;
  var $food;
  var $nest_placement;
  var $conservation_level;

  function song($lyrics)
  {
    echo "Song: " . $lyrics . "<br />";
    echo "------------------- <br />";
  }

  function can_fly()
  {
    echo "The " . $this->common_name . " bird can fly. <br />";
  }
}

$bird1 = new Bird;
$bird1->common_name = "Woodstock";
$bird1->food = "Popcorn & jelly beans";
$bird1->nest_placement = "Snoopy's house";
$bird1->conservation_level = "High";


$bird1_vars = get_object_vars($bird1);
echo  $bird1->common_name . "'s values:<br />";
echo "<pre>";
print_r($bird1_vars);
echo "<pre>";
echo $bird1->can_fly();
echo $bird1->song("Little birdie why do you fly upside down?");


$bird2 = new Bird;
$bird2->common_name = "Toucan Sam";
$bird2->food = "Fruit loops";
$bird2->nest_placement = "On your cereal box";
$bird2->conservation_level = "High";


$bird2_vars = get_object_vars($bird2);
echo $bird2->common_name . "'s values:<br />";
echo "<pre>";
print_r($bird2_vars);
echo "<pre>";
echo $bird2->can_fly();
echo $bird2->song("Follow your noooooose!");
