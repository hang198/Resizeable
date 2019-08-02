<?php
include "Resizeable.php";
include "Circle.php";
include "Rectangle.php";
$shape[0] = new Circle(10);
$shape[1] = new Rectangle(10, 5);
foreach ($shape as $value) {
    echo " is area: " . $value->getArea();
    echo "<br/>";
    $size = rand(1, 100);
    echo "Size up is: $size" . '%' . "<br/>";
    $value->resize($size);
    echo " new is area: " . $value->getArea();
    echo "<br/>";
}