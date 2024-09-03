<?php
class Bicycle
{
  public $brand;
  public $model;
  public $year;
  public $description = 'Used bicycle';
  protected $wheels = 2;

  //Bug created: when $weighKG variable was private it was not accessible to Unicycle subclass, changed to protected
  protected $weightKg = 0.0;


  public function name()
  {
    return "Tell me about this bicycle:<br />" . " Brand: " . $this->brand . ", Model: " . $this->model . ", Year: " . $this->year . "<br />";
  }

  public function wheelDetails()
  {
    $wheelString = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";

    return "It has " . $wheelString . ".";
  }

  //Getter
  public function weightKg()
  {
    return $this->weightKg . " kg.";
  }

  //Setter
  public function setWeightKg($value)
  {
    $this->weightKg = floatval($value);
  }

  //Getter
  public function weightLbs()
  {
    $weightLbs = floatval($this->weightKg) * 2.2046226218;
    return $weightLbs . " lbs.";
  }

  //Setter
  public function setWeightLbs($value)
  {
    $this->weightKg = floatval($value) / 2.2046226218;
  }
}

class Unicycle extends Bicycle
{
  protected $wheels = 1;

  public function bugTest()
  {
    return $this->weightKg;
  }
}

$newBike = new Bicycle;
$newUni = new Unicycle;

echo "Bicycle: " . $newBike->wheelDetails() . "<br/>";
echo "Unicycle: " . $newUni->wheelDetails() . "<br/>";

$trek = new  Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';


echo "<hr/>";

echo "Set weight using kg<br/>";
$trek->setWeightKg(1);
echo $trek->weightKg() . "<br/>";
echo $trek->weightLbs() . "<br/>";
echo "<hr/>";

echo "Set weight using lbs<br/>";
$trek->setWeightLbs(2);
echo $trek->weightKg() . "<br/>";
echo $trek->weightLbs() . "<br/>";

echo "<hr/>";

echo "Set weight for Unicycle<br/>";
$newUni->setWeightKg(1);
echo $newUni->weightKg() . "<br/>";
echo $newUni->weightLbs() . "<br/>";

echo $newUni->bugTest() . "<br/>";
