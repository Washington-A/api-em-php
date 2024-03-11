<?php

$json = file_get_contents('php://input');
$data = json_decode($json, true);


if($param == ''){
    try {
        if (isset($data['nome'])) {
            $name = $data['nome'];
    
            $sql = "INSERT INTO usuarios (nome) VALUES (:name)";
            
            $db = DB::connect();
            $rs = $db->prepare($sql);
            $rs->bindParam(':name', $name, PDO::PARAM_STR);
            $exec = $rs->execute();
    
            if ($exec) {
                echo json_encode(["dados" => 'Dados foram inseridos com sucesso.']);
            } else {
                echo json_encode(["dados" => 'Houve algum erro ao inserir os dados.']);
            }
        } else {
            echo json_encode(["dados" => 'O campo "nome" é obrigatório.']);
        }
    } catch (PDOException $e) {
        echo json_encode(["dados" => 'Erro ao inserir dados: ' . $e->getMessage()]);
    }
}else {
    http_response_code(400);
    echo json_encode(["erro" => 'Corpo da requisição inválido.']);
}
