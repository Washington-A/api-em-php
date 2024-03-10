<?php

if ($param == '') {
    try {
        $db = DB::connect();
        $rs = $db->prepare("SELECT nome FROM usuarios ORDER BY nome");
        $rs->execute();
        $obj = $rs->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(["erro" => $e->getMessage()]);
        exit;
    }
    if ($obj) {
        echo json_encode(["usuarios" => $obj]);
    } else {
        http_response_code(404);
        echo json_encode(["mensagem" => 'Não existem dados para retornar.']);
    }
} else if ($param < 1 || !is_numeric($param)) {
    http_response_code(400);
    echo json_encode(['erro' => 'ID inválido!']);
    exit;
}

if ($param != '') {
    try {
        $db = DB::connect();
        $rs = $db->prepare("SELECT nome FROM usuarios WHERE id={$param}");
        $rs->execute();
        $obj = $rs->fetchObject();
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(["erro" => $e->getMessage()]);
        exit;
    }
    if ($obj) {
        echo json_encode(["usuario" => $obj]);
    } else {
        http_response_code(404);
        echo json_encode(["mensagem" => 'Não existem dados para retornar.']);
    }
}