<?php

if ($param == '') {
    $db = DB::connect();
    $rs = $db->prepare("SELECT nome FROM usuarios ORDER BY nome");
    $rs->execute();
    $obj = $rs->fetchAll(PDO::FETCH_ASSOC);

    if ($obj) {
        echo json_encode(["usuarios" => $obj]);
    } else {
        echo json_encode(["dados" => 'Não existem dados para retornar']);
    }
}

else if ($param < 1 || !is_numeric($param)) {
    http_response_code(400);
    echo json_encode(['erro' => 'ID inválido!']); exit;
}

if ($param != '') {
    $db = DB::connect();
    $rs = $db->prepare("SELECT nome FROM usuarios WHERE id={$param}");
    $rs->execute();
    $obj = $rs->fetchObject();

    if ($obj) {
        echo json_encode(["usuario" => $obj]);
    } else {
        echo json_encode(["dados" => 'Não existem dados para retornar']);
    }
}