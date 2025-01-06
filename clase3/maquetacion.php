<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row border">
            <img src="images/funciones-de-la-imagen-1_0.webp" class="img-fluid" alt="..." >
        </div>
        <div class="row border">
            <?php require("menuh.php"); ?>
            
        </div>
        <div class="row border">
            <div class="col-12 col-md-3 col-lg-4 border"><?php require("menuv.php"); ?></div>
            <div class="col-12 col-md-9 col-lg-8 border"><?php require("card.php"); ?></div>
        </div>
        <div class="row border">Pie de pagina</div>
    </div>


</body>
</html>