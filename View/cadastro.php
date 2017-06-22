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
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="css/css.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div>
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header col-md-11">
                        <a href="#" class="navbar-brand" title="Página inicial">
                            Gerenciador de TCC
                        </a>
                    </div>
                    <!--                    <div class="navbar-header col-md-1">
                                            <a href="../index.php" class="navbar-brand" title="sair">
                                                Sair
                                            </a>
                                        </div>-->
                </div>
            </div>


            <form class="form-horizontal" action="">
                <fieldset>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="idAdmin">Usuário</label>
                        <div class="col-md-5">
                            <select id="idAdmin" name="idAdmin" class="form-control">
                                <option value="1">Aluno</option>
                                <option value="2">Professor</option>
                            </select>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="idNome">Nome</label>  
                        <div class="col-md-5">
                            <input id="idNome" name="idNome" type="text" placeholder="Nome do usuário" class="form-control input-md" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="idEmail">Email</label>  
                        <div class="col-md-5">
                            <input id="idNome" name="idEmail" type="text" placeholder="Email" class="form-control input-md" required="">
                        </div>
                    </div>
                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="idSenha">Senha</label>
                        <div class="col-md-5">
                            <input id="idSenha" name="idSenha" type="password" placeholder="Digite a senha" class="form-control input-md" required="">

                        </div>
                    </div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="idConfirmar"></label>
                        <div class="col-md-8">
                            <input type="submit" name="cadastrar" id="cadastrar"  class="btn btn-primary" value="Confirmar">
                            <a href="../index.php"title="cancelar" class="btn btn-danger">
                                cancelar 
                            </a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>
