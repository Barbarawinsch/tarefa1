<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 2</title>
</head>
<body>
    <?php

    $idade = 17;
    $altura = 1.68;
    $nome = 'Barbara';
    $casado = false;
    $numero = 1;

    define = ('CONFIG', 1500);

    function calc(){
        global $numero;
        echo $numero;
    }

     //calc();

    //$cadastro = array('cliente 1', 'cliente 2', 'cliente 3');
    //$cadastro[] = 'Cliente 1';
    //$cadastro[] = 'Cliente 2';
    //$cadastro = array('cliente 1' => 'Alice', 'cliente 2' => 'Daniel');

    $cadastro = array(
        'cliente 1' => array(
            nome => 'Alice',
            idade => 18,
        );
        'cliente 2' => array(
            nome => 'Daniel',
            idade => 40,
    );
       );
    var_dump(get_defined_vars());

     //echo $cadastro['cliente1']['nome']
     //echo "Olá, meu nome é $nome e eu tenho $idade anos.";
    ?>
</body>
</html>
