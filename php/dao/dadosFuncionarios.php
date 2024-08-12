<?php
require_once 'conexao.php';

//VERIFICA SE JA EXISTE O USUARIO CADASTRADO
function verificaUsuario($cpf)
{
    $v = pdo()->query("select * from funcionarios WHERE cpf = '$cpf'");
    $v->fetchAll(PDO::FETCH_ASSOC);

    if ($v->rowCount()) {
        return 'TRUE';
    } else {
        return 'FALSE';
    }
}

//CADASTRAR USUARIO
function cadastroUsurio($c, $e, $n, $t, $s) {
        $cpf = $c;
        $email = $e;
        $nome = $n;
        $telefone =$t;
        $nivel = "Administrador";
        $senha = password_hash($s,  PASSWORD_DEFAULT);

        $cadastrarUsuario = pdo()->prepare('INSERT INTO funcionarios (nome, cpf, email, senha, telefone, nivel) VALUES (:nome, :cpf, :email, :senha, :telefone, :nivel)');
        $cadastrarUsuario->bindParam(':nome', $nome, PDO::PARAM_STR);
        $cadastrarUsuario->bindParam(':cpf', $cpf, PDO::PARAM_STR);
        $cadastrarUsuario->bindParam(':email', $email, PDO::PARAM_STR);
        $cadastrarUsuario->bindParam(':senha', $senha, PDO::PARAM_STR);
        $cadastrarUsuario->bindParam(':telefone', $telefone, PDO::PARAM_STR);   
        $cadastrarUsuario->bindParam(':nivel', $nivel, PDO::PARAM_STR);
        $cadastrarUsuario->execute();
       
           if ($cadastrarUsuario->rowCount() > 0) {
            echo 'TRUE';
        } else {
            echo 'FALSE';
        }
        
}
