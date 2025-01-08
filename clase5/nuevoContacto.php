<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container">

        <h1>Nuevo Contacto</h1>

        <form action=".php" method="get">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre: </label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="Nombre" name="n">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Telefono: </label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="Telefono" name="t">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Carnet: </label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="Carnet" name="c">
            </div>
            <div class="mb-3">
                
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>