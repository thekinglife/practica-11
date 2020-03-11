

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title> Practica 11 - Variables</title>
    </head>
    <body>
        <h1>VARIABLES<h1>
    <?php
    $nombre='Lopez de los santos mauricio de jesus';
    $edad=20;
    $beca=4000;
    $estatus=true;
        echo "Tipos de variables <br>";
        echo $nombre.'<br/>';
        echo $edad.'<br/>';
        echo $beca.'<br/>';
        echo $estatus.'<br/>';
    ?>
        <h1>Operadores aritmeticos</h1>
    <?php
    $numero1=10;
    $numero2=5;

    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $multiplica=$numero1*$numero2;
    $division=$numero1/$numero2;

       
        echo 'La suma es='.$suma.'<br/> </center>';
        echo 'la suma es='.($numero1+$numero2).'<br/>';
        echo 'la resta es='.$resta.'<br/>';
        echo 'La multiplicaciòn es='.$multiplica.'<br/>';
        echo 'La divisiòn es='.$division.'<br/>';
        echo 'incremento de suma='.$suma++.'<br/>';
        echo 'decremento de suma='.$suma--.'<br/>';
        echo 'Residuo es='.$numero1%$numero2.'<br/>';
    ?>
    
    </body>
</html>