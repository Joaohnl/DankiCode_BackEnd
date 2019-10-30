<?php 

    define('INCLUDE_PATH', 'http://localhost/Projetos Práticos/Site Dinâmico/');
    define('SMTP_HOST', 'smtp.gmail.com');
    define('SMTP_USERNAME', 'joaohnl@gmail.com');
    define('SMTP_PASSWORD', 'h3nR1qu&');
    define('EMAIL_RECEIVER', 'joaohnl@gmail.com');
    define('EMAIL_NOME', 'João');

    //Autoload do COMPOSER
    require 'vendor/autoload.php';
    
    //Autoload de classes criadas
    $autoload = function($class) {
        if (file_exists('classes/'.$class.'.php')) {
            include('classes/'.$class.'.php');
        }
    };

    spl_autoload_register($autoload);
?>