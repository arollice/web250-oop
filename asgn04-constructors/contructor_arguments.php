<?php

class Bird
{
  public $commonName;
  public $latinName;

  //Constructor with two arguments
  public function  __construct($args = [])
  {
    $this->commonName = $args['commonName'] ?? NULL;
    $this->latinName = $args['latinName'] ?? NULL;
  }
}

$flyCatcher = new Bird(['commonName' => 'Acadian Flycatcher', 'latinName' => 'Empidonax virescens']);

$wren = new Bird(['commonName' => 'Carolina Wren', 'latinName' => 'Thryothorus Iudovicianus']);

echo "Common Name: " . $flyCatcher->commonName . "<br/>";
echo "Latin Name: " . $flyCatcher->latinName . "<br/>";

echo "<hr/>";

echo "Common Name: " . $wren->commonName . "<br/>";
echo "Latin Name: " . $wren->latinName . "<br/>";


/*

I think this is the way I am supposed to solve this? The bullet points read:

-commonName = Acadian Flycatcher
-latinName = Turdus Migratorius
-commonName = Eastern Towhee
-latinName = Pipilo erythrophthalmus

but the output matches what I have coded here

*/
