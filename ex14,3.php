<HTML>
<HEAD>
 <TITLE>Exemplo 14,3 </TITLE>
</HEAD>
<BODY bgcolor=#987654>
<center>
<?php
function testeStatic(){
Static $a=0;
$a=25;
echo "valor da variavel a=$a<br>";
}
echo "<h1> variavel estaica</h1>";
testeStatic();
testeStatic();
testeStatic();
?>
</center>
</BODY>
</HTML>
