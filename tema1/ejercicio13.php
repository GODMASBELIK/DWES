<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div, svg {
            display: flex;
            align-items: center;
            margin:10px;
        }
        span {
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
class Circle {

    private $size;
    private $posX;
    private $posY;
    private $color;

    public function __construct($size, $posX, $posY, $color) {
        $this->size = $size;
        $this->posX = $posX;
        $this->posY = $posY;
        $this->color = $color;
    }

    public function getPosX() {
        return $this->posX;
    }

    public function setPosX($posX): self {
        $this->posX = $posX;
        return $this;
    }

    public function getPosY() {
        return $this->posY;
    }

    public function setPosY($posY): self {
        $this->posY = $posY;
        return $this;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color): self {
        $this->color = $color;
        return $this;
    }

    public function getSize() {
        return $this->size;
    }
}

$colors = array("red", "black", "green", "blue", "yellow", "brown", "pink", "purple");

// Crear un objeto de la clase Circle con valores aleatorios
$circle = new Circle(rand(10, 50), rand(40, 500), rand(40, 500), $colors[rand(0, 7)]);
$circle2 = new Circle(rand(10, 50), rand(40, 500), rand(40, 500), $colors[rand(0, 7)]);
$circle3 = new Circle(rand(10, 50), rand(40, 500), rand(40, 500), $colors[rand(0, 7)]);
$circle4 = new Circle(rand(10, 50), rand(40, 500), rand(40, 500), $colors[rand(0, 7)]);
$circle5 = new Circle(rand(10, 50), rand(40, 500), rand(40, 500), $colors[rand(0, 7)]);

// Generar el SVG para el círculo
echo "<svg height=\"1000\" width=\"2000\" xmlns=\"http://www.w3.org/2000/svg\">";
echo "<circle r=\"" . $circle->getSize() . "\" cx=\"" . $circle->getPosX() . "\" cy=\"" . $circle->getPosY() . "\" fill=\"" . $circle->getColor() . "\" />";
echo "<circle r=\"" . $circle2->getSize() . "\" cx=\"" . $circle2->getPosX() . "\" cy=\"" . $circle2->getPosY() . "\" fill=\"" . $circle2->getColor() . "\" />";
echo "<circle r=\"" . $circle3->getSize() . "\" cx=\"" . $circle3->getPosX() . "\" cy=\"" . $circle3->getPosY() . "\" fill=\"" . $circle3->getColor() . "\" />";
echo "<circle r=\"" . $circle4->getSize() . "\" cx=\"" . $circle4->getPosX() . "\" cy=\"" . $circle4->getPosY() . "\" fill=\"" . $circle4->getColor() . "\" />";
echo "<circle r=\"" . $circle5->getSize() . "\" cx=\"" . $circle5->getPosX() . "\" cy=\"" . $circle5->getPosY() . "\" fill=\"" . $circle5->getColor() . "\" />";
echo "</svg>";

?>

</body>
</html>
