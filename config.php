<?php

$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "nieopen";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );