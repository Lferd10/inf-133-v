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
               "root","","instituto");

        $sql = "SELECT * FROM cursos ORDER BY nombre DESC";
        $result = $con->query($sql);

        foreach ($result as $reg) {
            echo "$reg[idc] - $reg[nombre] - $reg[fini] - $reg[precio]";
            echo "<br>";
        }

    ?>
    
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>