<?php
$hrefa = $_SERVER['REQUEST_URI'];
if ($hrefa == '/main') {
    include 'main.php';} 
elseif ($hrefa == '/martingarrix') {
    include 'martingarrix.php';}
 elseif ($hrefa == '/avicii') {
    include 'avicii.php';}
elseif ($hrefa == '/autorisat') {
    include 'autorisat.php';}  
elseif ($hrefa == '/registr') {
    include 'registr.php';}  
 ?>
