<section class="contato">
    <div class="center flex">
        <form method="post">
            <h1>Deixe sua mensagem aqui!</h1>
            <input type="text" name="nome" placeholder="Nome.." required />
            <input type="email" name="email" placeholder="E-mail.." />
            <input type="text" name="telefone" placeholder="Telefone.." />
            <textarea name="mensagem" placeholder="Mensagem..." cols="30" rows="10"></textarea>
            <div style="display: none;" id="formError"></div>
            <input class="submit" type="submit" name="acao" value="Enviar!">
            <button class="buttonLoad" style="display: none">
                <img src="<?php echo INCLUDE_PATH;?>img/ajax-loader.gif">
            </button>
            <div id="retornoSucesso" class="retornoForm">Formulário enviado com sucesso!</div>
            <div id="retornoFalha" class="retornoForm">Falha ao enviar o formulário!</div>
        </form>
    </div>
</section>