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
        <title></title>
    </head>
    <body>
        <div>
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button data-target="#navbar-main" data-toggle="collapse" type="button" class="navbar-toggle">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand" title="Página inicial">
                            Gerenciador de TCC
                        </a>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-login">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="submit"  id="login" tabindex="4" class="form-control btn-primary" value="Log In">
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="submit" name="register" id="login-submit" tabindex="4" class="form-control btn-primary" value="Log In">
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="login-form" action="" method="post" role="form" style="display: block;">
                                            <div class="form-group">
                                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6 col-sm-offset-3">
                                                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn-primary" value="Log In">
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


    </body>
</html>
