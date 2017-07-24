<?php
session_start();
?>
<html>
    <head>
        
    </head>
    <body>
        <form method="post" action="ArticulosSesiones.php">
            Articulo <input type="text" name="articulo">
            Precio <input type="text" name="precio">
            <input type="submit" value="Enviar">
       </form>
        <?php
        if(isset($_POST["articulo"]))
        {
            $_SESSION[$_POST["articulo"]]=$_POST["precio"];
        }
        if(count ($_SESSION)>0)
        {
            echo "<table border='1' width='200'>";
            echo "<tr>";
            echo "<th> Articulo</th>";
            echo "<th> Precio</th>";
            echo "</tr>";
            foreach ($_SESSION as $clave => $valor)
            {
                echo "<tr>";
                echo "<td>$clave</td>";
                echo "<td>$valor</td>";
                echo "</tr>";
            }
            echo "</tabla>";
         }
           ?>
        
    </body>
</html>

