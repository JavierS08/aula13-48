<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h2>Variables y Constantes</h2>";
    $ciudad="madrid";
    define("Dato","un dato de ejemplo");
    echo"la constante DATO es".DATO;
    $numero=5;
    $numero++;
    echo"<p>El número es ".$numero."</p>";//el valor será 6
    echo"<p>El número es ".$numero++."</p>";//será 7
    echo"<hr>";
    echo"<h3>Operadores</h3>";
    $numero1=10;
    $numero2=15;
    if($numero1>=$numero2){
        echo"<p>el primer número es mayor"
    }
    else{
        echo"<p>el primer número es menor</p>"
    }
    $aprobado=true;
    if($aprobado){
        echo"<p>has aprobado</p>";
    }
    else{
        echo"<p>NA: no apto por no se</p>"
    }
    $nota="8";
    if($nota==8){
        echo "<p>Tu nota es un 8 - Notable</p>";
    }
    else{
        echo"<p>Tu nota NO es un 8</p>"
    }
    echo"<hr>"
    echo"<h3>Estructuras de Control</h3>";
    for($i=0;$i<=10;$i++){
        echo $i."-";
    }
    $a=0;
    while($a<=10;){
        echo $a++."--";
    }//si no pusiesemos el doble + en el a haría un bucke infinito
    ?>

</body>
</html>