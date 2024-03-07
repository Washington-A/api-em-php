<?php
$host = 'mysql-container';
$user = 'root';
$password = 'root';
$database = 'devbuild';

$connection = new mysqli($host,$user,$password,$database);

if($connection-> connect_error){
    die("Falha na conexão: ".$connection-> connect_error);
}
