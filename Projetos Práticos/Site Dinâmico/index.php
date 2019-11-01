<?php 
    //Autoload do COMPOSER
    require_once 'vendor/autoload.php';
        
    use classes\Email;
    include('config.php');
?>

<!doctype html>
<html>
<head>
    <title>Site Dinâmico</title>
    <link href="<?php echo INCLUDE_PATH?>css/style.css" rel="stylesheet" />
    <link href="<?php echo INCLUDE_PATH?>css/all.css" rel="stylesheet" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Site, Dinâmico" />
    <meta name="author" content="João Loureiro" />
    <meta name="description" content="Site Dinâmico realizado para o curso da DankiCode" />
</head>
<body>
    <base baseurl="<?php echo INCLUDE_PATH; ?>" />
    <header>
        <div class="center flex">
            <a href="/"><div class="logo">Logomarca</div></a>
            <nav  class="Desktop-menu">
                <ul class="flex">
                    <li><a href="<?php echo INCLUDE_PATH?>home">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH?>contato">Contato</a></li>
                </ul>
            </nav>  
            <!-- ./ Desktop Menu -->
            
            <nav  class="Mobile-menu">
                <div class="Mobile-menu-button">
                    <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH?>home">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH?>contato">Contato</a></li>
                </ul>
            </nav>  
            <!-- Mobile Menu -->
        </div>
    </header>

    <?php 

        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch($url) {
            case 'sobre':
                echo '<target target="sobre" />';
                $url = 'home';
                break;
            case 'servicos':
                echo '<target target="servicos" />';
                $url = 'home';
                break;
        }

        if (file_exists('pages/'.$url.'.php') ) {
            include('pages/'.$url.'.php');
        } else {
            $erro404 = true;
            include('pages/erro-404.php');
        }
        
        

    ?>

    <footer <?php if (isset($erro404) || $url == 'contato') echo 'class="fixed"'?>>
        <div class="center">
            <p>João Loureiro - Todos os direitos reservados</p>
        </div>
    </footer>

    <script src="<?php echo INCLUDE_PATH?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH?>js/constants.js"></script>
    <script src="<?php echo INCLUDE_PATH?>js/scripts.js"></script>
    <script src="<?php echo INCLUDE_PATH?>js/formularios.js"></script>
    <?php if ($url == 'home') { ?>
        <script src="<?php echo INCLUDE_PATH?>js/slider.js"></script>
    <?php } ?>

</body>

</html>

