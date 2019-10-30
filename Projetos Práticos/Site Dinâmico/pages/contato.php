<?php 

    if (isset($_POST['acao'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];

        if ($email == $telefone && $email == '') {
            echo '<script> alert("Favor preencher pelo menos um campo de contato!")</script>';
        } else if ($mensagem == '') {
            echo '<script> alert("Favor preencher sua mensagem!")</script>';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script> alert("Favor preencher um e-mail válido!")</script>';
        } else {
            //Formulário válido, enviar!
            $corpo = '';

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
            $phpmail->enviarEmail();
        }
    }

?>


<section class="contato">
    <div class="center flex">
        <form method="post" action="">
            <h1>Deixe sua mensagem aqui!</h1>
            <input type="text" name="nome" placeholder="Nome.." required />
            <input type="email" name="email" placeholder="E-mail.." />
            <input type="text" name="telefone" placeholder="Telefone.." />
            <textarea name="mensagem" placeholder="Mensagem..." cols="30" rows="10"></textarea>
            <div style="display: none;" id="formError"></div>
            <input type="submit" name="acao" value="Enviar!">
        </form>
    </div>
</section>