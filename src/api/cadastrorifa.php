<?php
session_start();
// Incluir a conexão com banco de dados
include_once './config.php';

// Receber os dados do formulário
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


// Validar o campo nome_usuario, acessa o IF quando o campo está vazio 
if (empty($dados['nome'])) {
    // Criar o array com status e a mensagem de erro
    $retorna = ['status' => false, 'msg' => "Erro: Necessário preencher o campo nome!"];
} elseif (empty($dados['email'])) { // Validar o campo email_usuario, acessa o ELSEIF quando o campo está vazio 
    // Criar o array com status e a mensagem de erro
    $retorna = ['status' => false, 'msg' => "Erro: Necessário preencher o campo e-mail!"];
} elseif(empty($dados['telefone'])){
    $retorna = ['status' => false, 'msg' => "Erro: Necessário preencher o campo telefone!"];
}elseif(empty($dados['rifanumber'])){
    $retorna = ['status' => false, 'msg' => "Erro: Necessário preencher o campo email de confimaçao!"];
}else{ // Acessa o ELSE quando todos os campo estão preenchidos
    // Criar a QUERY para cadastrar usuário no banco de dados
    // Preparar a QUERY
    $query_usuario = 'INSERT INTO rifas (nome, email, telefone, rifanumber) VALUES (:nome, :email, :telefone, :rifanumber)';
    $cad_usuario = $conn->prepare($query_usuario);
    // Usar o bindValue para substituir o link da QUERY pelo valor que vem do formulário 
    $cad_usuario->bindValue(':nome', $dados['nome']);
    // Usar o bindValue para substituir o link da QUERY pelo valor que vem do formulário 
    $cad_usuario->bindValue(':email', $dados['email']);
     // Usar o bindValue para substituir o link da QUERY pelo valor que vem do formulário 
     $cad_usuario->bindValue(':telefone',$dados['telefone']);

     $cad_usuario->bindValue(':rifanumber',$dados['rifanumber']);
    // Executar a QUERY com PHP e PDO
    
    $cad_usuario->execute();
    // Acessa o IF quando cadastrar o registro no banco de dados
if ($cad_usuario->rowCount()) {
        // Criar o array com status e a mensagem de sucesso
        $retorna = ['true' => true, 'msg' => "sua rifa foi reservada porem falta o pagamento para ser sua"];
    } else { // Acessa o ELSE quando não cadastrar o registro no banco de dados
        // Criar o array com status e a mensagem de erro
        $retorna = ['status2' => false, 'msg' => "Erro: Usuário não cadastrado com sucesso!"];
    }
}
echo json_encode($retorna);
session_destroy();