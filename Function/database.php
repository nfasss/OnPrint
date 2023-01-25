<?php
$link = mysqli_connect("localhost", "root", "", "group2");
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}
