<?php


require_once 'config.php';
require_once 'login.php';
function pdo()
{
    try {
        $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DB, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); //code...
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (\Throwable $e) {
        return $e->getMessage();
    }
}



function verifica($email, $senha)
{
    $v = pdo()->query("select * from usuarios WHERE EMAIL = '$email' and SENHA = '$senha'");
    $dados = $v->fetchAll(PDO::FETCH_ASSOC);

    if ($v->rowCount()) {
        foreach($dados as $V) {
           $dados_usuario = array(
            "EMAIL"=> "{$V['EMAIL']}",
            "USUARIO"=> "{$V['USUARIO']}",
            "foto"=> "{$V['foto']}",
            "CARGO"=> "{$V['CARGO']}",
            "EMPRESA"=> "{$V['EMPRESA']}",
            "SETOR"=> "{$V['SETOR']}",
            "ATIVO"=> "{$V['ATIVO']}"
          );
        }
        return $dados_usuario;
    } else {
        return 'FALSE';
    }
}

