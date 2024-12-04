<?php

if (php_sapi_name() == "cli") {
    echo "consola";
    require_once "Faker/src/autoload.php";
} else {
    echo "navegador";
    require_once "C:\Program Files\Ampps\www\DWES\DWES\Faker\src\autoload.php";
}
echo "<br>";
$faker = Faker\Factory::create('es_ES');
for ($i=0; $i < 100; $i++) { 
    echo "Faker $i " . $faker->country;
    echo "<br>";
}

?>