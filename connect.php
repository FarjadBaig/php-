<?php

$con = new mysqli('localhost','root','','crud');
if ($con) {
    echo "connection succesfull";
}
else {
    echo "connection Not succesfull";
}
?>