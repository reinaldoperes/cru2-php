<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body style="background-color: #646366">
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
            <p hidden>RAMAL</p>
        </section>
        <div class="container" style="background-color: #c4c2c0; border-radius: 10px; border: 10px solid #c4c2c0; margin-top: 70px">
            <div clas="span10 offset1" style="back">
                <div class="row">
                    <h3 class="well"> Adicionar Contato </h3>
                    <form class="form-horizontal" action="create.php" method="post">

                        <div class="control-group <?php echo!empty($nomeErro) ? 'error ' : ''; ?>">
                            <label class="control-label">Nome</label>
                            <div class="controls">
                                <input style="border-radius: 3px; border: 1px solid #646366" size= "50" name="nome" type="text" placeholder="Nome" required="" value="<?php echo!empty($nome) ? $nome : ''; ?>">
                                <?php if (!empty($nomeErro)): ?>
                                    <span class="help-inline"><?php echo $nomeErro; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="control-group <?php echo!empty($enderecoErro) ? 'error ' : ''; ?>">
                            <label class="control-label">Endereço</label>
                            <div class="controls">
                                <input style="border-radius: 3px; border: 1px solid #646366" size="80" name="endereco" type="text" placeholder="Endereço" required="" value="<?php echo!empty($endereco) ? $endereco : ''; ?>">
                                <?php if (!empty($emailErro)): ?>
                                    <span class="help-inline"><?php echo $enderecoErro; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="control-group <?php echo!empty($telefoneErro) ? 'error ' : ''; ?>">
                            <label class="control-label">Telefone</label>
                            <div class="controls">
                                <input style="border-radius: 3px; border: 1px solid #646366" size="35" name="telefone" type="text" placeholder="Telefone" required="" value="<?php echo!empty($telefone) ? $telefone : ''; ?>">
                                <?php if (!empty($emailErro)): ?>
                                    <span class="help-inline"><?php echo $telefoneErro; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="control-group <?php echo!empty($emailErro) ? 'error ' : ''; ?>">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input style="border-radius: 3px; border: 1px solid #646366" size="40" name="email" type="text" placeholder="Email" required="" value="<?php echo!empty($email) ? $email : ''; ?>">
                                <?php if (!empty($emailErro)): ?>
                                    <span class="help-inline"><?php echo $emailErro; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="control-group <?php echo!empty($sexoErro) ? 'error ' : ''; ?>">
                            <label class="control-label" >Sexo</label>
                            <div class="controls">
                                <input style="border-radius: 3px; border: 1px solid #646366" size="1" name="sexo" type="text" placeholder="Sexo" required="" value="<?php echo!empty($sexo) ? $sexo : ''; ?>">
                                <?php if (!empty($sexoErro)): ?>
                                    <span class="help-inline"><?php echo $sexoErro; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-actions">
                            <br/>

                            <button type="submit" class="btn btn-success">Adicionar</button>
                            <a href="index_login.php" type="btn" class="btn btn-default">Voltar</a>

                        </div>
                    </form>
                </div>
            </div>
    </body>
</html>


<?php
require 'banco.php';

if (!empty($_POST)) {
    //Acompanha os erros de validação
    $nomeErro = null;
    $enderecoErro = null;
    $telefoneErro = null;
    $emailErro = null;
    $sexoErro = null;

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];

    //Validaçao dos campos:
    $validacao = true;
    if (empty($nome)) {
        $nomeErro = 'Por favor digite o seu nome!';
        $validacao = false;
    }

    if (empty($endereco)) {
        $enderecoErro = 'Por favor digite o seu endereço!';
        $validacao = false;
    }

    if (empty($telefone)) {
        $telefoneErro = 'Por favor digite o número do telefone!';
        $validacao = false;
    }

    if (empty($email)) {
        $telefoneErro = 'Por favor digite o endereço de email';
        $validacao = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = 'Por favor digite um endereço de email válido!';
        $validacao = false;
    }

    if (empty($sexo)) {
        $sexoErro = 'Por favor digite o campo!';
        $validacao = false;
    }

    //Inserindo no Banco:
    if ($validacao) {
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO pessoa (nome, endereco, telefone, email, sexo) VALUES(?,?,?,?,?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($nome, $endereco, $telefone, $email, $sexo));
        Banco::desconectar();
        header("Location: index_login.php");
    }
}
?>
