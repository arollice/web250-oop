<?php

class Halloween
{
  protected $spooky;

  public function isSpooky()
  {
    if (!$this->spooky) {
      return "Nope, not spooky.";
    } else {
      return "Definitely spooky.";
    }
  }
}

class Ghost extends Halloween
{
  protected $spooky = True;
  public $name;

  public function scareMe()
  {
    return "BOO!";
  }
}

class Candy extends Halloween
{
  private $type;
  protected $spooky = False;
  public $treat = True;

  public function trickOrTreat()
  {
    echo "<i>\"Trick or treat!\" </i><br />";

    if ($this->treat)
      echo "🍫 (treat) <br />";
    else
      echo "💩 (trick) <br />";
  }

  //Setter
  public function setTypeOfCandy($value)
  {
    return $this->type = $value;
  }

  //Getter
  public function getTypeOfCandy()
  {
    return $this->type;
  }
}

$casper = new Ghost;
$casper->name = "Casper";
echo "Name: " . $casper->name . "<br />";
echo "Is it spooky? " . $casper->isSpooky() . "<br/>";
echo $casper->scareMe() . "<br />";

echo "---------------------- <br />";

$chocolate = new Candy;
$chocolate->setTypeOfCandy("Chocolate");
$chocolate->treat = False;
echo " Type of candy: " . $chocolate->getTypeOfCandy() . "<br/>";
echo "Is it spooky? " . $chocolate->isSpooky() . "<br/>";
echo $chocolate->trickOrTreat();
