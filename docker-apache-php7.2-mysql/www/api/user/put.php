<?php
$json = file_get_contents('php://input');
$data = json_decode($json, true);

if ($param == '' || $param < 1) {
    http_response_code(400);
    echo json_encode(['erro' => "ID inválido."]);
    exit;
}

if (is_numeric($param) && $param > 0 && isset($data['nome'])) {

    $sql = "UPDATE usuarios SET nome = ? WHERE id = ?;";
    $name = $data['nome'];

    try {
        $db = DB::connect();
        $rs = $db->prepare($sql);
        $exec = $rs->execute([$name, $param]);
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(["erro" => $e->getMessage()]);
        exit;
    }
    if ($exec && $rs->rowCount() > 0) {
        echo json_encode(["mensagem" => 'Dados atualizados com sucesso.']);
    } else if ($rs->rowCount() === 0) {
        http_response_code(404);
        echo json_encode(["mensagem" => 'ID não encontrado.']);
    }
} else {
    http_response_code(400);
    echo json_encode(["erro" => 'Corpo da requisição inválido.']);
}

