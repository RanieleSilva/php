<HTML>
<HEAD>
 <TITLE>Exemplo 14,2 </TITLE>
</HEAD>
<BODY bgcolor=#987654>
<center>
<?php
function testeglobal(){
global$a;
$a=25;
}
echo"<h1>variavel global </h1>";
$a=0;
texteglobal();
echo"valor da variavel a=$a";
?>
</center>
</BODY>
</HTML>
