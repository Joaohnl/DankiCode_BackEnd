<?php 
    define('INCLUDE_PATH', 'http://localhost/DankiCode_BackEnd/Projetos Práticos/Site Dinâmico/');
    define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');
    define('SMTP_HOST', 'smtp.gmail.com');
    define('SMTP_USERNAME', 'joaohnl@gmail.com');
    define('SMTP_PASSWORD', );
    define('EMAIL_RECEIVER', 'joaohnl@gmail.com');
    define('EMAIL_NOME', 'João');
    define('HOST', 'localhost');
    define('DBNAME', 'projeto_01');
    define('USERNAME', 'root');
    define('PASSWORD', '');

    session_start();

    //Autoload de classes criadas
    $autoload = function($class){
		if($class == 'Email'){
			require_once('vendor/autoload.php');
		}
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);
?>
