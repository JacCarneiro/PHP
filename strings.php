<?php
    $idade = 21;
    //exibição com aspas duplas
    echo "Olá mundo!";
    echo "Olá eu tenho $idade anos\n" . PHP_EOL;

    //exibição com aspas simples
    echo 'Ola eu tenho '. $idade . ' anos';

    $idade = 16;

    echo "Olá mundo!" . PHP_EOL;
    echo "Eu tenho \"$idade\" anos";

    echo PHP_EOL . PHP_EOL;

    echo "Você só pode entrar, se tiver mais de 18 anos\n";

    echo "Você tem $idade anos. Pode entrar";
