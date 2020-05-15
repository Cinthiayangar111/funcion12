<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
 function cuadradocubo($valor, &$cuad, &$cub)
 {
 $cuad = $valor * $valor;
 $cub = $valor * $valor * $valor;
 }
 cuadradocubo(2, $c1, $c2);
 echo "El cuadrado de 2 es:" . $c1 . "<br>";
 echo "El cubo de 2 es:" . $c2;
 ?>
</body>
</html>