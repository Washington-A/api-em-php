<?php

if ($param == '') { echo json_encode(['ERRO' => "É necessário informar um id de user."]); exit; }

if ($param < 1) { echo json_encode(['ERRO' => "É necessário informar um id de user."]); exit; }

if ($param != '') {
    $db = DB::connect();
    $rs = $db->prepare("DELETE FROM usuarios WHERE id={$param}");
    $exec = $rs->execute();

    if ($exec && $rs->rowCount() > 0) {
        echo json_encode(["dados" => 'Dados foram excluídos com sucesso.']);
    } else {
        echo json_encode(["dados" => 'Houve algum erro ao excluir os dados ou o ID não existe.']);
    }
}