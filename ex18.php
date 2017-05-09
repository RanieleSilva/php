<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<h1>"exemplo 18"</h1>
<?php
$carros['palio']['cor']='azul';
$carros['palio']['pontecia']='1.0';
$carros['palio']['opcional']='ar condicionado';

$carros['corsa']['cor']='cinza';
$carros['corsa']['pontecia']='1.3';
$carros['corsa']['opcional']='mp3';

$carros['gol']['cor']='branco';
$carros['gol']['pontecia']='1.0';
$carros['gol']['opcional']='metalica';
foreach($carros as $modelos=>$caracteristica){
echo'<b>=>modelo $modelo</b><br>';
foreach($caracteristica as $caracteristica){
echo'caracteristica $caracteristica';
}
}
$num (array(2,4),array(6,5);
foreach($num as $valor2){
echo"$valor";
}
echo"<br>";
?>
</body>
</html>

