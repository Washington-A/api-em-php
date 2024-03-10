<?php
$json = file_get_contents('php://input');
$data = json_decode($json, true);

if ($param == '') {
    http_response_code(400);
    echo json_encode(['erro' => "ID não inserido."]); exit;
}

if (is_numeric($param) && $param > 0 && isset($data['nome'])) {

    $sql = "UPDATE usuarios SET nome = ? WHERE id = ?;";

    $name = $data['nome'];

    $db = DB::connect();
    $rs = $db->prepare($sql);
    $exec = $rs->execute([$name, $param]);

    if ($exec && $rs->rowCount() > 0) {
        echo json_encode(["mensagem" => 'Dados atualizados com sucesso.']);
    } else {
        http_response_code(500);
        echo json_encode(["erro" => 'Houve erro ao atualizar dados.']);
    }
} else {
    http_response_code(400);
    echo json_encode(["erro" => 'ID ou corpo da requisição inválido.']);
}

