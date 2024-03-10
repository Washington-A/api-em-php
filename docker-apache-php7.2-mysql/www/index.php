<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

date_default_timezone_set("America/Sao_Paulo");

if (isset($_GET['path'])) {
    $path = explode("/", $_GET['path']);
} else {
    echo "Caminho não existe";
    exit;
}

if (isset($path[0])) {
    $api = $path[0];
} else {
    echo "Caminho não existe";
    exit;
}
if (isset($path[1])) {
    $endereco = $path[1];
} else {
    $endereco = '';
}
if (isset($path[2])) {
    $param = $path[2];
} else {
    $param = '';
}
#var_dump($endereco);#user
#var_dump($param);#id
#echo "saindo do index";

$method = $_SERVER['REQUEST_METHOD'];
if ($api == 'api' && $endereco == 'users') {
    include_once "classes/db.class.php";
    include_once "api/user/users.php";
}

