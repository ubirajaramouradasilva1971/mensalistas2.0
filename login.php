<?php
session_start();
include_once 'php/dao/conexao.php';



if (isset($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha'];
   

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (verifica($email, $senha) != 'FALSE') {
          
          //RECEBENDO DADOS DO USUARIO
          $DADOS = verifica($email, $senha);

            //CRIANDO A SESSÃO
            $_SESSION['email']   = $DADOS["EMAIL"];
            $_SESSION['usuario'] = $DADOS["USUARIO"];
            $_SESSION['foto'] = $DADOS["foto"];
            $_SESSION['cargo'] = $DADOS["CARGO"];
            $_SESSION['empresa'] = $DADOS["EMPRESA"];
            $_SESSION['setor'] = $DADOS["SETOR"];
            $_SESSION['ativo'] = $DADOS["ATIVO"];
  

          header('Location: index.php');
        } else {
            header('Location: 404.html');
        }
    }

    function retornaDadosUsuario($email, $usuario, $foto, $cargo, $id_empresa, $setor_escrevente)
{
   echo $email;
   echo $udsuario;
   echo $foto;
   echo $cargo;
   echo $id_empresa;
   echo $setor_escrevente;
}
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">

    <title>
        13º Tabelião de Notas - Sistema de Mensalistas
    </title>
    <!--     Fonts and icons     -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<style>
    body {
        box-sizing: border-box;
        background-color:
            #0c3c62;
        margin-top: 250px;
    }

    body .formulario {
        background-color:
            #0c3c62;
        width: 50%;
    }

    .letras_form {
        color: rgb(221, 216, 216);
    }

    @media screen and (max-width: 1000px) {
        body {
            background-color:
                #0c3c62;
            margin-top: 100px;
        }
    }

    @media screen and (max-width: 1000px) {
        body .formulario {
            background-color:
                #0c3c62;
            width: 100%;
        }
    }

    @media screen and (max-width: 380px) {
        body .formulario {
            background-color:
                #0c3c62;
            width: 100%;
        }
    }
</style>

<body>
    <section class="container">


        <div class="row">
            <div class="col-lg-6 col-12 mt-sm-1 imagem" id="imagem">
                <img class="w-100" src="assets/images/cartorio/logo.jpg">
            </div>

            <div class="col-lg-6 col-12 mt-1 formulario">
                <div class="panel panel-default letras_form">
                    <div class="panel-heading mt-1 text-center">
                        <h5>SISTEMA PARA MENSALISTAS</h5>
                    </div>

                    <div class="panel-body">
                        <form action="" method="post" class="form-inline" role="form">
                            <div class="form-group">
                                <label class="sr-only mt-4" for="exampleInputEmail2">Email address / Endereço do
                                    Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only mt-4" for="exampleInputPassword2">Password / Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                            </div>

                            <button type="submit" name="formulario" id="formulario"
                                class="btn btn-dark mt-2">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

</body>

</html>