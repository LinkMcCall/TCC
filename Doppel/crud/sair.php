<?php 
// Inicia sessões, para assim poder destruí-las 
session_start(); 
session_destroy(); 

header("Location: http://127.0.0.1:8080/Doppel/"); 
?>
