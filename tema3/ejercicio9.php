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

        text {
            font-size: 6rem;
        }

        td,tr,table {
border: 1px solid black;
        }

        div {
            display: flex;
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

    echo "<table>";
    echo "<tr>";

for ($i=0; $i <= rand(0,10); $i++) { 
    echo "<td>";
    echo "<svg height=\"200\" width=\"200\" xmlns=\"http://www.w3.org/2000/svg\">";
    $circle = new Circle(rand(40, 80), 95, 95, $colors[rand(0,7)]);
    $rot = rand(-80, 80);
   echo "<div>";
        echo "<circle r=\"" . $circle->getSize() . "\" cx=\"" . $circle->getPosX() . "\" cy=\"" . $circle->getPosY() . "\" fill=\"" . $circle->getColor() . "\">";
        echo "</circle>";
        echo '<text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="' . $colors[rand(0,7)] . '" transform="rotate('. $rot.')">' . $i+1 . '</text>';
    echo "</div>";
    echo "</td>";
    echo "</svg>";
}
echo "</tr>";

    echo "</table>";
    ?>

</body>

</html>