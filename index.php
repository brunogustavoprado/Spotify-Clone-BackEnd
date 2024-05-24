<?php
session_start();
$uri = $_SERVER['REQUEST_URI'];

if (isset($_SESSION['name'])) {
if ($uri === '/untitled4/index.php'){
    include "views/login.php";
}}else{
    include "views/index.php";
}

