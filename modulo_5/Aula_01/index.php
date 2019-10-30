<?php 

    echo "<p><strong>Aula 01</strong></p>";
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    echo "<hr>";

    //AULA 02

    echo "<p><strong>Aula 02</strong></p>";
    $nome = "João";
    echo "<p>$nome</p>";

    $idade = "28";
    echo "<p>$idade</p>";

    echo "<p>Seu nome é $nome e sua idade é $idade</p>";
    echo 'Seu nome é ' .$nome. ' e sua idade é ' .$idade;

    echo "<hr>";

    // AULA 03

    echo "<p><strong>Aula 03</strong></p>";
    //Tipos de variáveis


    //String
    $nome = "João";

    // Número ou Inteiro
    $idade = 28;

    //Boolean
    $bool = true;

    //Decimais
    $double = 10.09;

    echo "<p> Meu nome é $nome </p>";
    echo 'Minha idade é ' .$idade . '<br>';
    echo $bool;

    // AULA 04

    echo "<hr>";


    echo "<p><strong>Aula 04</strong></p>";

    define('NOME', 'João');

    echo NOME;


    // AULA 05

    echo "<hr>";


    echo "<p><strong>Aula 05</strong></p>";
    //Arrays = Variáveis com diversas chaves!

    $nomes = array("João", "Guilherme", "José");
    $idades[] = 23;
    $idades[] = 25;

    echo $nomes[0] . ' ' . $idades[0];
    echo "<br />";

    echo $nomes[1] . ' ' . $idades[1];
    echo "<br />";

    $informacoes['nome'] = "João";
    $informacoes['idade'] = "28";
    $informacoes['cidade'] = "Santos";

    echo 'seu nome é ' . $informacoes['nome'] . ', sua idade é ' . $informacoes['idade'] . ' e sua cidade é ' . $informacoes['cidade'];


    // AULA 06

     echo "<hr>";


     echo "<p><strong>Aula 06</strong></p>";

     //Arrays simples e referenciais

    $arr = array('nome' => 'João', 'Guilherme', 'José');

    foreach($arr as $key => $value) {
        echo $key;
        echo "<br />";
        echo $value;
        echo "<hr>";
    }

    // Arrays Multidimensionais

    $arr2 = array(array('Guilherme', 'João'), array(28, 24));

    echo $arr2[0][1];

    // AULA 07

    echo "<hr>";


    echo "<p><strong>Aula 07</strong></p>";
 
    //Servidor "dorme por x segundos.
    //sleep(3);
    echo 'ola';

    //Die, código morre.

    $nome = "João";

    if ($nome != "Guilherme") {
        echo "Funcionou!";
    } else {
        die("morreu!");
    }

    // AULA 08

    echo "<hr>";

    echo "<p><strong>Aula 08</strong></p>";

    // DATE e funções para String

    date_default_timezone_set('America/Sao_Paulo');

    //time() retorna o tempo em segundos
    //Adicionando 10 minutos na hora atual
    $data = date('d/m/Y H:i:s', time() + (60*10));

    echo $data;
    echo '<br />';

    //Funções STRING

    $conteudo = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente reiciendis aspernatur blanditiis consequuntur culpa deleniti, modi doloremque quidem repudiandae facere quam id temporibus tempore aut ratione inventore obcaecati hic dolore!";

    //Corta uma string
    echo substr($conteudo, 0, 5);
    echo '<br />';

    //Explode separa uma string em um array de acordo com o delimitador
    $nome = "João Henrique Novaes Loureiro";

    $nomes = explode(" ", $nome);
    print_r($nomes);
    echo '<br />';

    //Implode transforma um array em string
    $nome = "";
    $nome = implode(" ", $nomes);
    echo $nome;
    echo '<br />';

    // striptags remove todas as tags html 
    echo "<h1>João Loureiro</h1>";
    echo strip_tags("<h1>João Loureiro</h1>");
    echo '<br />';

    //htmlentities mostra todo o código html sem ser processado

    echo htmlentities("<h1> João Loureiro </h1>");

?>