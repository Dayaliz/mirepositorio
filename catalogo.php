<?php
require_once( "egcc.php" );
fnSessionStart();
if($_SESSION["codigo"]){
	$k = 1; // Con botón Comprar
} else {
	$k = 0; // Sin botón Comprar
}
$cn = fnConnect($msg);
if(!$cn) {
	fnShowMsg("Error",$msg);
	return;
} else {
	$rs = mysql_query("select * from articulo",$cn);
	say("<table width=660>");
	say("<tr>");
	say("<th width=90 align=center valign=middle>Articulo</th>");
	say("<th width=240 align=left valign=middle>Descripcion</th>");
	say("<th width=90 align=center valign=middle>Articulo</th>");
	say("<th width=240 align=left valign=middle>Descripcion</th>");
	say("</tr>");
	$col = 1;
	while($row = mysql_fetch_array($rs,MYSQL_ASSOC)) {
		if($col==1){say("<tr>");}
		say("<td align=center valign=middle>");
		say("<img src='fotos/".$row["idarticulo"].".jpg' width='100'
			height='100' border='1'>");
		say("</td>");
		say("<td align=left valign=middle>");
		say("Codigo:".$row["idarticulo"]."<br>");;
		say($row["nomarticulo"]."<br>");
		say($row["descripcion"]."<br>");
		say("Precio:".$row["precio"]."<br>");;
		say("Stock:".$row["stock"]."<br>");
		$codigo = $row["idarticulo"];
		if($k){
			$seguro = $_SESSION["seguro"];
			say("<form method='post' action='canasta_add.php'>");
			say("<input type='hidden' name='codigo' value='$codigo'>");
			say("<input type='hidden' name='seguro' value='$seguro'>");
			say("<input type='submit' value='Comprar'>");
			say("</form>");
		}
		say("</td>");
		if($col==2){
			say("</tr>");
			$col = 1;
		}else{
			$col = 2;
		}
	}
	if($col==1){say("</tr>");}
	say("</table>");
}
?>