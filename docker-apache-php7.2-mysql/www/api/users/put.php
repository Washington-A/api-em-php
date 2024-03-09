<?php
$json = file_get_contents('php://input');
$data = json_decode($json, true);

if ($param == '') { echo json_encode(['ERRO' => "É necessário informar um id de user."]); exit; }

if ($param != '' && is_numeric($param) && $param > 0) {

    $sql = "UPDATE usuarios SET nome = ? WHERE id = ?;";

    $values = [];

    foreach ($data as $indice => $valor) {
        $values[] = $valor; // Adiciona o valor atual ao array $values
    }
    $name = $values[0];

    $db = DB::connect();
    $rs = $db->prepare($sql);
    $exec = $rs->execute([$name, $param]);

    if ($exec) {
        echo json_encode(["dados" => 'Dados atualizados com sucesso.']);
    } else {
        echo json_encode(["dados" => 'Houve erro ao atualizar dados.']);
    }
} else {
    echo json_encode(["dados" => 'ID inválido.']);
}

