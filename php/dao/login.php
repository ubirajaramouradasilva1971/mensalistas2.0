<?php 
require_once 'conexao.php';

function loginUsuario($email, $senha) {
    $usuario = pdo()->query("select * from usuarios WHERE email ='$email'");
    $v = $usuario->fetchAll(PDO::FETCH_ASSOC);

    if($usuario->rowCount()) {
        foreach($v as $value) {
            $value["nome"]; 
            $value["email"];
            $value["senha"];
        }
        //VERIFICA A SENHA CRIPTOGRADA
    return confereSenha($senha, $value["senha"]);
            //CRIAR A SESSÃO
    } else {
        return 'FALSE';
    }
     }

//FUNÇÃO QUE VERIFICA A SENHA CRIPTOGRADA
 function confereSenha($senha, $senhaBanco) { 
    if (password_verify($senha, $senhaBanco)) {
            return 'TRUE';
          } else {  
            return 'FALSE';
          }
     }

     function loginAdministrador($email, $senha) {
    $usuario = pdo()->query("select * from funcionarios WHERE email ='$email'");
    $v = $usuario->fetchAll(PDO::FETCH_ASSOC);

    if($usuario->rowCount()) {
        foreach($v as $value) {
            $value["nome"]; 
            $value["email"];
            $value["senha"];
        }
        //VERIFICA A SENHA CRIPTOGRADA
    return confereSenhaAseministrador($senha, $value["senha"]);
            //CRIAR A SESSÃO
    } else {
        return 'FALSE';
    }
     }

//FUNÇÃO QUE VERIFICA A SENHA CRIPTOGRADA
 function confereSenhaAseministrador($senha, $senhaBanco) { 
    if (password_verify($senha, $senhaBanco)) {
            return 'TRUE';
          } else {  
            return 'FALSE';
          }
     }