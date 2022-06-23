<?php

include 'cont.php';
$id = $_GET['id'];
$qu = " DELETE FROM `users` WHERE id = $id ";
mysqli_query($cont, $qu);
header('location:disply.php');
?>