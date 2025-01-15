<?php

session_start();
if(isset($_SESSION["time"]) ) {
    $_SESSION["time"]++;
} else {
    $_SESSION["time"] = 0;

}

echo $_SESSION["time"]

?>