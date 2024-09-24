<?php

class ParseCsv
{
  public static $delimiter = ',';
  private $filename;
  private $header;
  private $data = [];
  private $row_count = 0;

  public function __construct($filename = '')
  {
    if ($filename != '') {
      $this->file($filename);
    }
  }

  public function file($filename)
  {
    if (!file_exists($filename)) {
      echo "File does not exist.";
      return false;
    } else if (!is_readable($filename)) {
      echo "File is not readable.";
      return false;
    }
    $this->filename = $filename;
    return true;
  }

  public function parse()
  {
    if (!isset($this->filename)) {
      echo "FIle not found.";
      return false;
    }

    //Clears previous results 
    $this->reset();

    // Initialize properties if they are not set
    $this->data = [];  // Ensure $this->data is an empty array
    $this->header = null; // Initialize header to null

    $file = fopen($this->filename, 'r');

    if (!$file) {
      throw new Exception("Unable to open the file: " . $this->filename);
    }

    while (!feof($file)) {
      $row = fgetcsv($file, 0, self::$delimiter);
      if ($row === FALSE) {
        continue; // Skip if the row is false (EOF or error)
      }

      if ($this->header === null) {
        // First row should be the header
        $this->header = $row; // Save header
      } else {
        // Combine header with data row
        if (count($row) === count($this->header)) {
          $this->data[] = array_combine($this->header, $row);
          $this->row_count++;
        } else {
          // Handle the case where the row length doesn't match the header length
          // You can log an error or handle it as needed
        }
      }
    }

    fclose($file);
    return $this->data;
  }

  public function last_results()
  {
    return $this->data;
  }

  public function row_count()
  {
    $this->row_count;
  }

  private function reset()
  {
    $this->header = NULL;
    $this->data = [];
    $this->row_count = 0;
  }
}
