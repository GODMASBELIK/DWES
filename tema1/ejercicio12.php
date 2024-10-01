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
$colors = array("red","black","green","blue","yellow");
$consen = array(rand(5, 500),rand(5, 500),rand(5, 500),rand(5, 500),rand(5, 500));
foreach($consen as $o) {
    static $a = 0;
    echo "   <div>\n";
    echo "     <span>$o</span>\n";    
    echo '     <svg width="500" height="50" xmlns="http://www.w3.org/2000/svg">\n';
    echo "       <rect width=\"$o\"" . 'height="50" x="10"  fill=' . $colors[$a] . ' />\n';
    $a++;
    echo "</svg>\n";
    echo "  </div>\n";
    
}

?>
</body>
</html>
