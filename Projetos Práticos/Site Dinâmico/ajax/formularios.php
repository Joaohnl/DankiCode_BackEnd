<?php
    include '../config.php';

    $corpo = '';
    $resposta = [];

    $phpmail = new Email();
    foreach ($_POST as $key => $value)  {
        if ($key == 'acao') {
            break;
        }
        $corpo .= "<br>";
        $corpo .= ucfirst($key) ." : ". $value;
        $corpo .= "<br><br> <hr>";
        
    }
    
    $conteudoEmail = array('assunto' => 'Mensagem de contato no site!', 'corpo' => $corpo);
    $phpmail->addAddress(EMAIL_RECEIVER, EMAIL_NOME);
    $phpmail->conteudoEmail($conteudoEmail);

    if($phpmail->enviarEmail()) {
        $resposta['retorno'] = true;
    } else {
        $resposta['retorno'] = false;
    }
  
    $resposta['retorno'] = true;

    die(json_encode($resposta));
?>