<?php
session_start();
?>
<body bgcolor="#D2EBF" style="font-family: Tahoma;" >
    <?php
     echo "<h2>Usuario:". $_SESSION["nombre"]."".$$_SESSION["apellido"];
     if(count($_SESSION["carrito"])==0)
     {
         echo "<h3>Carrtio vacio</h3>";
         
     }
     else
     {
         echo "<table widht='400' border='1'>";
         foreach ($_SESSION["carrito"]as $articulo => $cantidad)
             echo "<tr>";
             echo "<td>$articulo</td>";
             echo "<td>$cantidad</td>";
             echo "</tr>";
     }
     echo "</table>";
        
     aqui se cambio>
