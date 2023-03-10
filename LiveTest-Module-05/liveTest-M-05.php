<?php
class Car {
  // Properties
  private $make;
  private $model;
  private $year;
  

  // Methods
  function set_make($make) {
    $this->make = $make;
  }
  function set_model($model) {
    $this->model = $model;
  }
  function set_year($year) {
    $this->year = $year;
  }

  
  function get_make() {
    return $this->make;
  }
  function get_model() {
    return $this->model;
  }
  function get_year() {
    return $this->year;
  }
}

$toyota = new Car();
$honda = new Car();

$toyota->set_make('Toyota');
$toyota->set_model('Corolla');
$toyota->set_year('2015');

$honda->set_make('Honda');
$honda->set_model('Civic');
$honda->set_year('2015');


echo "Make: ".$toyota->get_make(). "\n";

echo "Model: ".$toyota->get_model(). "\n";

echo "Year: ".$toyota->get_year(). "\n";

echo "Make: ".$honda->get_make(). "\n";

echo "Model: ".$honda->get_model(). "\n";

echo "Year: ".$honda->get_year(). "\n";


?>