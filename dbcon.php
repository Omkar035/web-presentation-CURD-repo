<?php

$con = mysqli_connect("localhost", "root", "", "selfserve");

if (!$con) {
    die('connection Failed' . mysqli_connect_error());
}

?>