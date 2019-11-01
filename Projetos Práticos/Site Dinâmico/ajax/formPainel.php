<?php 
    include '../config.php';

    $resposta[] = '';
    $user = $_POST['username'];
    $password = $_POST['password'];
    if(!$sql = MySql::conectar()) {
        $resposta['retorno'] = 'falhaBD';
        die(json_encode($resposta) );
    } else {

        $sql->prepare('SELECT FROM tb_adminUsers WHERE user=? AND password=?');
        $sql->execute(array($user, $password));
        if($sql->rowCount() == 1) {
            //Usuário e senha existem no BD, LOGADO!
            $_SESSION['login'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $password;
            header('Location: '.INCLUDE_PATH_PAINEL);
        } else {
            // Login falhou!
            $resposta['retorno'] = false;
            die(json_encode($resposta));
        }

    }
        

?>