<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div,
        svg {
            display: flex;
            align-items: center;
            margin: 10px;
        }

        span {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php
    class Circle
    {

        private $size;
        private $posX;
        private $posY;
        private $color;

        public function __construct($size, $posX, $posY, $color)
        {
            $this->size = $size;
            $this->posX = $posX;
            $this->posY = $posY;
            $this->color = $color;
        }

        public function getPosX()
        {
            return $this->posX;
        }



        public function setPosX($posX): self
        {
            $this->posX = $posX;
            return $this;
        }

        public function getPosY()
        {
            return $this->posY;
        }

        public function setPosY($posY): self
        {
            $this->posY = $posY;
            return $this;
        }

        public function getColor()
        {
            return $this->color;
        }

        public function setColor($color): self
        {
            $this->color = $color;
            return $this;
        }

        public function getSize()
        {
            return $this->size;
        }
    }

    $colors = array("red", "black", "green", "blue", "yellow", "brown", "pink", "purple");
$i = rand(1,10);

    echo "<table>";
    echo "<tr>";
    while (--$i != 0) {
        echo "<td>";
    echo "<svg height=\"300\" width=\"300\" xmlns=\"http://www.w3.org/2000/svg\">";
        $circle = new Circle(rand(40, 80), 75, 75, $colors[rand(0, 7)]);
        echo "<circle r=\"" . $circle->getSize() . "\" cx=\"" . $circle->getPosX() . "\" cy=\"" . $circle->getPosY() . "\" fill=\"" . $circle->getColor() . "\" />";
        echo "</td>";
    echo "</svg>";
    }
    echo "</tr>";
    echo "</table>";
    ?>

</body>

</html>