<?php

class Bird
{

  /* Start of Active Record Code */
  static protected $database;

  static public function set_database($database)
  {
    self::$database = $database;
  }

  static public function find_by_sql($sql)
  {
    return self::$database->query($sql);
    if (!$result) {
      exit("Database query failed.");
    }
    return $result;
  }

  static public function find_all()
  {
    $sql = "SELECT * FROM birds";
    return self::find_by_sql($sql);
  }

  /* End of Active REcord Code */

  public $common_name;
  public $habitat;
  public $food;
  public $nest_placement;
  public $behavior;
  public $conservation_id;
  public $backyard_tips;

  /*
  Create a protected constant array called CONSERVATION_OPTIONS using the following scale.
  Use the CONDITION_OPTIONS from the bicycle.class.php file

  1 = Low concern
  2 = Moderate concern
  3 = Extreme concern
  4 = Extinct
  */

  protected const CONDITION_OPTIONS = [
    1 => 'Low concern',
    2 => 'Moderate concern',
    3 => 'Extreme concern',
    4 => 'Extinct',
  ];

  /*
   - Create a public __contruct that accepts a list of $args[]
   - Use the Null coalescing operator
   - Create a default value of 1 for conservation_id
 */
  public function __construct($args = [])
  {
    $this->common_name = $args['common_name'] ?? '';
    $this->habitat = $args['habitat'] ?? '';
    $this->food = $args['food'] ?? '';
    $this->nest_placement = $args['nest_placement'] ?? '';
    $this->behavior = $args['behavior'] ?? '';
    $this->conservation_id = $args['condition_id'] ?? 1;
    $this->backyard_tips = $args['backyard_tips'] ?? '';
  }


  /*
  Create a public method called conservation(). This method should mimic the
    public function condition() from the bicycle.class.php file
    */


  public function conservation()
  {
    if ($this->conservation_id > 0) {
      return self::CONDITION_OPTIONS[$this->conservation_id];
    } else {
      return 'Unknown';
    }
  }
}
