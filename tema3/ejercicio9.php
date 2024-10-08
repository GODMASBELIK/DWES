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
            text-shadow: 2px 2px white;
        }

        td,
        tr,
        table {
            border: 1px solid black;
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
echo "<table>\n";
    echo "<tr>\n";

    for ($i = 0; $i <= rand(0, 10); $i++) {
        echo "<td>\n";
        echo "<svg height=\"300\" width=\"300\" xmlns=\"http://www.w3.org/2000/svg\">\n";
        $circle = new Circle(rand(40, 80), 150, 150, $colors[rand(0, 7)]);  // Ajustar las coordenadas para centrar
        $rot = rand(-80, 80);
        echo "<circle r=\"" . $circle->getSize() . "\" cx=\"" . $circle->getPosX() . "\" cy=\"" . $circle->getPosY() . "\" fill=\"" . $circle->getColor() . "\" />\n";
        echo '<text x="' . $circle->getPosX() . '" y="' . $circle->getPosY() . '" dominant-baseline="middle" text-anchor="middle" fill="' . $colors[rand(0, 7)] . '" transform="rotate(' . $rot . ' ' . $circle->getPosX() . ' ' . $circle->getPosY() . ')">' . ($i + 1) . '</text>\n';
        echo "</svg>\n";
        echo "</td>\n";
    }

    echo "</tr>\n";
    echo "</table>\n";
    ?>

</body>

</html>