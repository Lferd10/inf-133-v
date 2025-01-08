<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">


    <?php
        // Conexion a MySQL
        $con = mysqli_connect("localhost",
                "root", "", "contactos2");

        $n = $_GET['n']; // Nombre
        $t = $_GET['t']; // Telefono
        $c = $_GET['c']; // Carnet
        //echo "$e - $m";

        $sql = "INSERT INTO contacto(nombre, telEf, ci)
                VALUES ('$n','$t', $c)";

        $result = $con->query($sql)

        if($result)
            echo "<h3>REGISTO GUARDADO</h3>"
        else
            echo "<h3>ERROR AL GUARDAR</h3>"
    ?>
</diV>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>