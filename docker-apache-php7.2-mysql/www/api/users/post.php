<?php

if ($endereco == '' && $param == '') { echo json_encode(['ERRO' => 'Caminho não encontrado!']); exit; }

if ($endereco == 'adiciona' && $param == '') {
    $sql = "INSERT INTO users (";
    $contador = 1;
    foreach (array_keys($_POST) as $indice) {
        if (count($_POST) > $contador) {
            $sql .= "{$indice},";
        } else {
            $sql .= "{$indice}";
        }
        $contador++;
    }
    $sql .= ") VALUES (";
    $contador = 1;
    foreach (array_values($_POST) as $valor) {
        if (count($_POST) > $contador) {
            $sql .= "'{$valor}',";
        } else {
            $sql .= "'{$valor}'";
        }
        $contador++;
    }
    $sql .= ")";
    
    $db = DB::connect();
    $rs = $db->prepare($sql);
    $exec = $rs->execute();

    if ($exec) {
        echo json_encode(["dados" => 'Dados foram inseridos com sucesso.']);
    } else {
        echo json_encode(["dados" => 'Houve algum erro ao inseris os dados.']);
    }
}