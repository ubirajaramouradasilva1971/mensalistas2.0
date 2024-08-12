<?php
require_once 'conexao.php';

//VERIFICA SE O CONTATO JA ESTÁ CADASTRADO
function verifica($e)
{
    $v = pdo()->query("select * from emails WHERE email = '$e'");
    $v->fetchAll(PDO::FETCH_ASSOC);

    if ($v->rowCount()) {
        return 'TRUE';
    } else {
        return 'FALSE';
    }
}

//CADASTRA O CONTATO QUE ENVIOU MENSAGEM
function contato($n, $e)
{
    $email = $e;
    $nome = $n;
    $ativo = 'Sim';
    try {
        /*
            Importancia do prepare
            Se notar que os parametros estão recebendo algum tidpo de caracter que não é comum
            ele não vai aceitar

        */
        $smtp = pdo()->prepare("INSERT INTO emails (nome, email, ativo) VALUES (:nome, :email, :ativo)");
        //bindValue, aceita apenas variaveis ex: $nome
        $smtp->bindParam(":nome", $nome, PDO::PARAM_STR);
        $smtp->bindParam(":email", $email, PDO::PARAM_STR);
        $smtp->bindParam(":ativo", $ativo, PDO::PARAM_STR);
        $smtp->execute();
        if ($smtp->rowCount() > 0) {
            return 'TRUE';
        } else {
            return 'FALSE';
        }
    } catch (\Throwable $th) {
        return $th->getMessage();
    }

}

//VERIFICA SE JA EXISTE O USUARIO CADASTRADO
function verificaUsuario($cpf)
{
    $v = pdo()->query("select * from usuarios WHERE cpf = '$cpf'");
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
        $nivel = "Cliente";
        $senha = password_hash($s,  PASSWORD_DEFAULT);

        $cadastrarUsuario = pdo()->prepare('INSERT INTO usuarios (nome, cpf, email, senha, telefone, nivel) VALUES (:nome, :cpf, :email, :senha, :telefone, :nivel)');
        $cadastrarUsuario->bindParam(':nome', $nome, PDO::PARAM_STR);
        $cadastrarUsuario->bindParam(':cpf', $cpf, PDO::PARAM_STR);
        $cadastrarUsuario->bindParam(':email', $email, PDO::PARAM_STR);
        $cadastrarUsuario->bindParam(':senha', $senha, PDO::PARAM_STR);
        $cadastrarUsuario->bindParam(':telefone', $telefone, PDO::PARAM_STR);   
        $cadastrarUsuario->bindParam(':nivel', $nivel, PDO::PARAM_STR);
        $cadastrarUsuario->execute();
       
           if ($cadastrarUsuario->rowCount() > 0) {
            return 'TRUE';
        } else {
            return 'FALSE';
        }
        
}
