<?php
#echo"entroou no get";
if ($param < 1 || !is_numeric($param)) { echo json_encode(['ERRO' => 'Caminho não encontrado!']); exit; }

if ($param == '') {
    $db = DB::connect();
    $rs = $db->prepare("SELECT * FROM users ORDER BY nome");
    $rs->execute();
    $obj = $rs->fetchAll(PDO::FETCH_ASSOC);

    if ($obj) {
        echo json_encode(["dados" => $obj]);
    } else {
        echo json_encode(["dados" => 'Não existem dados para retornar']);
    }
}

if ($param != '') {
    $db = DB::connect();
    $rs = $db->prepare("SELECT * FROM usuarios WHERE id={$param}");
    $rs->execute();
    $obj = $rs->fetchObject();

    if ($obj) {
        echo json_encode(["dados" => $obj]);
    } else {
        echo json_encode(["dados" => 'Não existem dados para retornar']);
    }
}