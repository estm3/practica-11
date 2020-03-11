<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 11-Variables</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>VARIABLES</h1>
    <?php
    $nombre='Esther Mendoza Hernández';
    $edad=20; 
    $beca=1250000.50;
    $estatus=true;
    echo"Tipo de variables <br>";
    echo $nombre.'<br/>';  // . concatenación
    echo $edad.'<br/>'; // '' cadenas
    echo $beca.'<br/>';  // $ variable
    echo $estatus.'<br/>';

    echo $nombre.'Tiene'.$edad.'Años de edad y gana'.$beca.'</br>';
    ?>  

    <?php
      $numero1=10;
      $numero2=5;
      $suma= $numero1 + $numero2;
      $resta= $numero1 - $numero2;
      $multiplica= $numero1 * $numero2;
      $division= $numero1 / $numero2;

      echo 'La suma es='.$suma.'</br>';
      echo 'La suma es='.$numero1+$numero2.'</br>';
      echo 'La resta es='.$resta.'</br>';
      echo 'La multiplicación es='.$multiplica.'</br>';
      echo 'La división es='.$division.'</br>';
      echo 'incremento de suma'.$suma++.'</br>';
      echo 'decremento de suma'.$suma--.'</br>';
      echo 'residuo es= '.$numero1%$numero1;
    ?>
   

</body>¿
</html>