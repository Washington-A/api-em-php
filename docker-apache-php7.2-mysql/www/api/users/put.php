<?php
$json = file_get_contents('php://input');
$data = json_decode($json, true);

if ($param == '') {
    http_response_code(400);
    echo json_encode(['ERRO' => "É necessário informar um id de user."]); exit;
}

if (is_numeric($param) && $param > 0 && isset($data['nome'])) {

    $sql = "UPDATE usuarios SET nome = ? WHERE id = ?;";

    $name = $data['nome'];

    $db = DB::connect();
    $rs = $db->prepare($sql);
    $exec = $rs->execute([$name, $param]);

    if ($exec && $rs->rowCount() > 0) {
        echo json_encode(["dados" => 'Dados atualizados com sucesso.']);
    } else {
        http_response_code(500);
        echo json_encode(["dados" => 'Houve erro ao atualizar dados.']);
    }
} else {
    http_response_code(400);
    echo json_encode(["dados" => 'ID ou corpo da requisição inválido.']);
}

