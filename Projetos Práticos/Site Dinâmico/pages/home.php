<?php 

    if (isset($_POST['acao'])) {
        //Form enviado, verificar campo email
        if ($_POST['email'] != "") {
            // Há informação no campo de email
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // TUDO CERTO, É UM EMAIL!
                // PODE ENVIAR

                $phpmail = new Email();
                $content = array('assunto' => 'Há um novo e-mail cadastrado no site!', 'corpo' => $email);
                
                
                $phpmail->addAddress(EMAIL_RECEIVER, EMAIL_NOME);
                $phpmail->conteudoEmail($content);
                $phpmail->enviarEmail();
                
            } else {
                echo '<script> alert("Favor inserir um email válido!" </script>)';
            }
        } else {
            echo '<script> alert("Favor preencher o campo de e-mail!" </script>)';
        }
    }

?>


<section class="banner-principal flex">
    <div class="center">
        <form class="flex" method="post" action="">
            <h1>Qual o seu melhor e-mail?</h1>
            <input class="w100" type="email" name="email" required />
            <input class="w100" type="submit" name="acao" value="Cadastrar!">
        </form>
    </div>
</section>
<!-- /.banner-principal -->

<section class="informativo" id="sobre">
    <div class="center flex">
        <div class="w50 flex">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, asperiores. Ipsa unde sapiente illo dolorem quod perspiciatis tempore accusantium voluptate ducimus quas doloremque enim vero debitis error magnam repellendus hic veniam, aliquam asperiores id quisquam rem voluptatem maiores? Iure voluptas natus rerum odit reiciendis, officia non. Voluptates temporibus suscipit nisi reprehenderit molestiae quisquam. Perspiciatis debitis, eveniet obcaecati vero autem aut eligendi officia possimus molestias maxime inventore laboriosam dolor! Dolorem optio, alias officia cum deserunt repellendus qui voluptate sit nesciunt eligendi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea autem accusantium, voluptates amet voluptate ipsum eaque voluptatem cupiditate omnis ipsam exercitationem ullam deserunt tempora aliquid explicabo! Ad repellat quam, dolore dolores libero, quis fuga impedit ut, et corporis modi. Amet, unde sit quod magnam molestiae at quaerat soluta exercitationem vero voluptatum similique, illum cum, praesentium veniam consequuntur sunt! Nisi, tempora libero in vitae sit amet laborum sapiente assumenda exercitationem dignissimos alias consequuntur id sed laudantium nemo ducimus temporibus repellendus dolore.</p>    
        </div>
        <div class="w50 flex">
            <img src="<?php echo INCLUDE_PATH?>img/img-perfil.jpg" alt="Imagem de Perfil">
        </div>
    </div>
</section>
<!-- Section Informativa -->

<section class="especialidades" id="servicos">
    <div class="center flex">
        <h2 class="title w100">Especialidades</h2>

        <div class="box-especialidade w33">
            <i class="fab fa-css3-alt"></i>
            <h3>CSS3</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore delectus eius facilis! Facilis cupiditate tempore doloremque aspernatur illo, molestias dolor dicta quas maiores recusandae voluptate commodi ipsam quasi quam voluptates.</p>
        </div>
        <div class="box-especialidade w33">
            <i class="fab fa-html5"></i>
            <h3>HTML5</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore delectus eius facilis! Facilis cupiditate tempore doloremque aspernatur illo, molestias dolor dicta quas maiores recusandae voluptate commodi ipsam quasi quam voluptates.</p>           
        </div>
        <div class="box-especialidade w33">
            <i class="fab fa-js-square"></i>
            <h3>JavaScript</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore delectus eius facilis! Facilis cupiditate tempore doloremque aspernatur illo, molestias dolor dicta quas maiores recusandae voluptate commodi ipsam quasi quam voluptates.</p>     
        </div>
    </div>
</section>
<!-- /.especialidades -->

<section class="depoimentos">
    <div class="center flex">
        <div class="w50">
            <h2>Depoimentos dos nossos clientes!</h2>
            <div class="depoimento-single">
                <p class="depoimento-descricao">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non quam quaerat, eaque accusamus quidem unde maxime. Possimus, quod. Necessitatibus assumenda praesentium esse voluptatum ullam modi ad provident voluptates possimus doloribus!</p>
                <p class="depoimento-autor">Lorem Ipsum</p>
            </div>
            <hr>
            <div class="depoimento-single">
                <p class="depoimento-descricao">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non quam quaerat, eaque accusamus quidem unde maxime. Possimus, quod. Necessitatibus assumenda praesentium esse voluptatum ullam modi ad provident voluptates possimus doloribus!</p>
                <p class="depoimento-autor">Lorem Ipsum</p>
            </div>
            <hr>
            <div class="depoimento-single">
                <p class="depoimento-descricao">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non quam quaerat, eaque accusamus quidem unde maxime. Possimus, quod. Necessitatibus assumenda praesentium esse voluptatum ullam modi ad provident voluptates possimus doloribus!</p>
                <p class="depoimento-autor">Lorem Ipsum</p>
            </div>
        </div>
        <div class="w50">
            <h2>Serviços</h2>
            <div class="servicos">
                <ul>
                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam facere necessitatibus iusto explicabo quisquam sed tempore enim consequatur. Perspiciatis, veniam!</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus veritatis, ratione et eaque perferendis at dolorum reprehenderit ab exercitationem corporis!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab incidunt quod veritatis assumenda nemo, iste ullam delectus. Dolore, qui provident.</li>
                </ul>
            </div>
        </div>
    </div>
</section>