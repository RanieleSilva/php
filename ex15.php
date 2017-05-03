<HTML>
<HEAD>
 <TITLE>Exemplo 15 </TITLE>
</HEAD>
<BODY bgcolor=#987654>
<center>
<?php
function mais5(&$numero){
$numero+=5;
}
echo "<h1> passagem de parametro por referencia</h1>;
$a=3;
mais5($a);
echo "valor da variavel a=<br>";
?>
</center>
</BODY>
</HTML>
