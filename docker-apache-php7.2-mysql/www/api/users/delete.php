<?php

if ($param == '' || $param < 1) {
    http_response_code(400);
    echo json_encode(['erro' => "É necessário informar um id válido."]);
    exit;
}

if ($param != '') {
    try {
    $db = DB::connect();
    $rs = $db->prepare("DELETE FROM usuarios WHERE id={$param}");
    $exec = $rs->execute();
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(["erro" => 'Erro: '. $e->getMessage()]);
        exit;
    }
    if ($exec && $rs->rowCount() > 0) {
        echo json_encode(["mensagem" => 'Dados foram excluídos com sucesso.']);
    } else if ($rs->rowCount() === 0) {
        http_response_code(404);
        echo json_encode(["erro" => 'ID não existe.']);
    }
}