<?php
echo "hola mundo";
echo 'PHP!';
//comentario de una linea
/*
comentario de 
varias
lineas

*/

$mivariable = "variable" ; //tipo string
$micontador = 10; //tipo entenro
$miarreglo = array('uno','dos', 'tres'); #arreglo indexado
echo "<br/>".$miarreglo[0];
echo "<br/>$miarreglo[0]";
echo '<br/>'.$miarreglo[0];
$miarreglo2 = array("uno"=>'val1',"dos"=>'val2',"tres"=>'val3',);
echo '<br/>'.$miarreglo2["uno"];

print_r($miarreglo);  echo'<br/>';
print_r($miarreglo2);
echo json_encode($miarreglo2);
$objeto =  array('nombre'=>'Juan','materia'=>'Quimica');
echo json_encode($objeto);
$objeto2 = array('nombre'=>'Juan','materias' => array('mat1'=>'matematicas','mat2'=>'fisica','mat3'=>'quimica'));
echo'<br/>';
echo json_encode($objeto2);

echo'<br/>';
$cadena = 'cadena de catacteres';
echo substr($cadena,3,2);

#ejemplo1.php?a=3&b=4

$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
echo "el valor de la a es: $a,
 el valor de b es: $b";
$op = $a>$b?"la suma es: ". ($q+$b):
"la resta es:". ($a-$b);
echo "el resultado es $op";
/*
if ($a>$b)
$op=$A+$B;
else
$op=$a+$b;
investigar require, riquire onde, imclude include ofcieañ"
*/
