<?php

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados JSON e decodifica
    $data = json_decode(file_get_contents("php://input"), true);

    
    
    /* Function Cadastrar(email, senha) {
        
    }
    */


    // Verifica se os campos esperados estão presentes nos dados decodificados
    if (!isset($data['email']) || !isset($data['password'])) {
        $response = array("status" => "error", "message" => "Campos de formulário ausentes.");
    } else {
        // Recupera os dados do formulário
        $email = $data['email'];
        $password = $data['password'];
        
        // Exemplo de resposta para o JavaScript
        $response = array("status" => "200", "message" => "Dados recebidos com sucesso!");
    }
} else {
    // Se não foi enviado via POST, retorna um erro
    $response = array("status" => "400", "message" => "Método de requisição inválido.");
}

echo json_encode($response);

?>
