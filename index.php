<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/css.css" rel="stylesheet">
        <script language="JavaScript" src="jss/login.js"></script>
        <title></title>
    </head>
    <body>
        <div>
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <a href="#" class="navbar-brand" title="Página inicial">
                            Gerenciador de TCC
                        </a>
                    </div>
                </div>
            </div>
            <legend>
                <center>
                    <img src="imagens/tcc.jpg" class="imagem">
                </center>
            </legend>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-login">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="login-form" action="Controller/loginController.php" method="post" role="form" style="display: block;">
                                            <div class="form-group">
                                                <input type="text" name="login" id="login" tabindex="1" class="form-control" placeholder="Username" value="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="senha" id="senha" tabindex="2" class="form-control" placeholder="Password">
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="submit" id="confirmar" name="login-submit" id="login-submit" tabindex="4" class="form-control btn-primary" value="Entrar">
                                                    </div>
                                                    <div class="col-sm-6 center">
                                                        <a type="button" href="View/cadastro.php" class="form-control btn-primary"> Cadastrar-se</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>                
                                    </div>              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>
