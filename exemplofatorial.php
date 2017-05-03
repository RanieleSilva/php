<HTML>
<HEAD>
 <TITLE>Exemplo fatorial </TITLE>
</HEAD>
<BODY bgcolor=#987654>
<center>
<?php
function fatorialrec($numero){
if($numero>=1){
return1;
}
else{
$numero2=numero--;
return$numero*fatorialrec($numero2--);
}
}
fatorialrec(5);
?>
</center>
</BODY>
</HTML>
