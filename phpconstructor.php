<!DOCTYPE html>
<html>
       <h2>Displaying Fruit Name and Colour</h2>
</html>
<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit("Apple", "Red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
echo "<br>";
echo "<br>";
$banana = new Fruit("Banana", "Yellow");
echo $banana->get_name();
echo "<br>";
echo $banana->get_color();
echo "<br>";
echo "<br>";
$orange = new Fruit("Orange", "Orange");
echo $orange->get_name();
echo "<br>";
echo $orange->get_color();
?>