<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
<div class="container">
    <h1>Lista de Contactos</h1>    
    
    <?php
        // Conexion a MySQL
        $con = mysqli_connect("localhost",
               "root","","contactos2");

        $sql = "SELECT * FROM contacto";
        $result = $con->query($sql);

        foreach ($result as $reg) {
            echo "$reg[idc] - $reg[nombre] - $reg[telef]";
            echo "<br>";
        }

    ?>
    
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>