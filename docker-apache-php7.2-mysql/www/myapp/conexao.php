<?php
$host = 'docker-apache-php72-mysql-db-1';
$user = 'root';
$password = 'root';
$database = 'devbuild';

$connection = new mysqli($host,$user,$password,$database);

if($connection-> connect_error){
    die("Falha na conexão: ".$connection-> connect_error);
}
