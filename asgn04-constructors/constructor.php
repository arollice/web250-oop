<?php

class Bird
{
  public $commonName;
  public $latinName;

  //Constructor with two arguments
  public function  __construct($commonName, $latinName)
  {
    $this->commonName = $commonName;
    $this->latinName = $latinName;
  }
}

$robin = new Bird('American Robin', 'Turdus migratorius');
$easternTowhee = new Bird('Eastern Towhee', 'Pipilo erythrophthalmus');

echo "Common Name: " . $robin->commonName . "<br/>";
echo "Latin Name: " . $robin->latinName . "<br/>";

echo "<hr/>";

echo "Common Name: " . $easternTowhee->commonName . "<br/>";
echo "Latin Name: " . $easternTowhee->latinName . "<br/>";
