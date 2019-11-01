<!doctype html>
<html>
<head>
    <title>Site Dinâmico</title>
    <link href="<?php echo INCLUDE_PATH_PAINEL?>css/style.css" rel="stylesheet" />
    <link href="<?php echo INCLUDE_PATH?>css/all.css" rel="stylesheet" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Site, Dinâmico" />
    <meta name="author" content="João Loureiro" />
    <meta name="description" content="Site Dinâmico realizado para o curso da DankiCode" />
</head>
<body>
    <div class="login">
        <form class="flex" method="post">
            <h1>Login</h1>
            <input class="w100" type="text" name="username" placeholder="Usuário" required />
            <input class="w100" type="password" name="password" placeholder="Senha" required />
            <input class="w100 submit" type="submit" name="acao" value="Login">
            <button class="buttonLoad" style="display: none">
                <img src="<?php echo INCLUDE_PATH;?>img/ajax-loader.gif">
            </button>
            <div id="retornoSucesso" class="retornoForm">Formulário enviado com sucesso!</div>
            <div id="retornoFalha" class="retornoForm">Falha ao enviar o formulário!</div>
            <div id="retornoBD" class="retornoForm">Falha ao conectar ao banco de dados!</div>

        </form>
    </div>

</body>
</html>