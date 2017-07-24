<?php
session_start();
if(!isset($_POST["clave"]))
{
    ?>
<body bgcolor="#D2EBF7" style="font-family: Tahoma;">
    <?php
    echo "<h2>Usuario:".$_SESSION["nombre"]."".$_SESSION["apellido"];?>
    <form name="form1" method="post" action="agregararticulo.php">
        <input type="hidden" name="clave" value="123456">
        <table widht="200">
            <tr>
                <td>Articulo</td>
                <td>
                    <input type="text" name="articulo" size="30" maxlength="10" value="articulo">
                </td>
            </tr>
             <tr>
                <td>Cantidad</td> 
                <td>
                    <input type="text" name="cantidad" size="30" maxlength="4" value="cantidad">
                </td>
            </tr>
             <tr>
                <td>Articulo</td>
                <td>
                    <input type="submit" name="submit" value="enviar">
                </td>
            </tr>
        </table>
    </form>
</body>
<?php
}
else
{
$articulo=$_POST["articulo"];
$cantidad=$_POST["cantidad"];
$_SESSION["carrito"][$articulo]=$cantidad;
header("location: carrito.php");
}
?>