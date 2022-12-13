<!DOCTYPE html>
<html>
<body>
 <h1>My first PHP page</h1>
<?php
// variable
/*
multi line comment
*/
$color = "Ruma";
echo $color ."<br>";

$txt = "text";
echo "this is $txt" ."<br>";
// variable concat
$txt2 = "this is text two," ."<br>";
echo "this is text one," ."<br>" . $txt2 ."This is text three" ."<br>";

// variable addition
$x = 5;
$y = 10;
echo $x + $y ."<br>";

// array
$cars =array("BMW", "VOLVO", "TOYOTA");
var_dump($cars);

// class
class car {
    public $model = "MERCEDES BENSE";
    public $color = "BLACK";

    public function getCarInformation(){
        return "model : " . $this->model ."color : ". $this->color;
    }
}
$car1 = new car();

echo $car1->getCarInformation()."<br>";

// constant
define("dbName", "database1");
echo dbName;

?>

</body>
</html>