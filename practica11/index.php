<html>
<head>
<title>practica 11 php </title>
</head>
<body>
<?php
//Nombre del alumno
//Usuario variables en PHP
echo "<h1>variables</h1>";
$nombre='Rosa'; //tipo cadenas
$apellidos='Cruz Vazquez';
$edad=21;
$salario=12345.50;
$fechaNacimento='11/01/1996';
$estats=true;
echo $nombre.'<br/>';
echo $apellidos.'<br/>';
echo 'Nombre completo:'.$nombre.' '.$apellidos.'<br/>';
echo 'TU EDAD ES: '.$edad.'<br/>';
echo 'TU SALARIO ES: '.$salario.'<br/>';
?>
<h1>OPERADORES ARITMETICOS</h1>
<?php
   $a=5;
   $b=3;
   $suma=$a+$b;
   $resta=$a-$b;
   $multiplica=$a*$b;
   $divide=$a/$b;
   echo 'La suma de '.$a.'+'.$b.' es: '.$suma.'<br/>';
   echo 'La resta de '.$a.'-'.$b.' es: '.$resta.'<br/>';
   echo 'La multiplicacion de '.$a.'*'.$b.' es: '.$multiplica.'<br/>';
   echo 'La divide de '.$a.'/'.$b.' es: '.$divide.'<br/>';
?>
</body>
</html>