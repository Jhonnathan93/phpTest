<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" /> 
    <title>Prueba</title>
</head>
<body class="bg-dark">
    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>Prueba</h2>
        </div>
    </header>
    <main>
        <div class="container my-4">
            <form action="includes/formhandler.inc.php" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Escribe tu nombre:">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="lastname" placeholder="Escribe tu apellido:">
                </div>
                <div class="d-grid gap-2 col-12 mx-auto">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </div>
            </form>
    </main>
    <!-- footer --> 
    <div class="copyright py-4 text-center text-white"> 
        <div class="container"> 
            <h4></h4>
        </div> 
    </div> 
    <!-- footer --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>