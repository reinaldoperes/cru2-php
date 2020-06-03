<html lang="pt-br">
    <head>
        <link rel="icon" 
              type="image/png" 
              href="img/icon.png" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <style type="text/css">
            .carousel-caption{
                font-size: 2vw;
            }
        </style>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="background-color: #c4c2c0">
        <div class="container-fluid">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">Principal</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">

                            <li><a href="empresa.php">Empresa</a></li>
                            <li><a href="contato.php">Contato</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        </div> <!-- /fim menu da pagina -->
        <style>
            @keyframes backgroundMove {
                from {background-position-x: 0%, 50%, 100%}
                to {background-position-x: 1320%, 930%, 550%}
            }
        </style>
        <!-- /fim menu da pagina #ffb844;-->
        <!--<div class="container" style="background-color: #646366; min-height: 100px; width: auto"> <!-- topo da pagina -->       
        <!--</div> <!-- fim da pagina -->
        <section class="animation-section1" style="background-color:#e0dee5;    
                 font-family: Oswald, sans-serif;
                 padding: 25px 90px;
                 font-size: 90px;
                 font-weight: bold;
                 text-transform: uppercase;
                 color: #7f6a5e;
                 background-image: url(img/bg-banner-back.png), url(img/bg-banner-middle.png), url(img/bg-banner-front.png);
                 background-repeat: repeat-x;
                 background-size: auto 100%;animation: backgroundMove 120s linear 0s infinite reverse;
                 background-position-x: 0%, 50%, 100%;
                 animation: background Move 120s linear 0s infinite reverse;
                 animation-name: backgroundMove;
                 animation-duration: 120s;
                 animation-timing-function: linear;
                 animation-delay: 0s;
                 animation-iteration-count: infinite;
                 animation-direction: reverse;
                 animation-fill-mode: initial;
                 animation-play-state: initial;">
            <p hidden>Ramais</p>
        </section>
        <div class="container-fluid">
            <div class="col-sm-4-1 col-xs-4-1 col-md-4 col-lg-4">
            </div>
            <div class="col-sm-4-1 col-xs-4-1 col-md-4 col-lg-4">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Efetue o login para continuar</strong></h3>
                    </div>
                    <form action="confirmar_login.php" method="post">
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group">
                                    <label for="input" class="col-sm-2 control-label">Login</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="login" name="login" placeholder="Informe corretamente seu usuário" id="input" class="form-control" value="" required="required" title="">
                                    </div>
                                </div>
                            </div><br/>	
                            <div class="row">
                                <div class="form-group">
                                    <label for="input" class="col-sm-2 control-label">Senha</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="senha" placeholder="Informe a senha do mala" id="input" class="form-control" value="" required="required" title="">
                                    </div>
                                </div>
                            </div><br/>	
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <button type="submit" value="logar" class="btn btn-warning">Logar no sistema</button>
                                    </div>
                                </div>
                            </div>	
                        </div>
                    </form>
                </div>
                <div class="col-sm-4-1 col-xs-4-1 col-md-4 col-lg-4">
                </div>
            </div>
        </div>
        <div class="container-fluid">

        </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>