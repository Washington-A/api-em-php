<?php
class DB
{
    public static function connect()
    {
        $host = 'docker-apache-php72-mysql-db-1'; #substituir pelo nome da dependencia mysql no container
        $user = 'root';
        $pass = 'root';
        $base = 'devbuild';

        try {
            $pdo = new PDO("mysql:host={$host};dbname={$base};charset=UTF8;", $user, $pass);
            // Habilita o modo de lançamento de exceções
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $e) {
            // Trata o erro de conexão
            echo "Erro de conexão: " . $e->getMessage();
            return null;
        }
    }
}