<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Login</h1>
    <hr>
    <div class="container-sm">
        <div class="row-md-4 justify-content-center">
            <div class="bg-light p-4 rounded-3 shadow-sm col-md-4 mx-auto mt-5 border border-2">
                <h2 class="text-center mb-5">Iniciar Sesión</h2>
                <form method="POST">
                    <div>
                        <input type="email" name="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
                    </div>
                    <div class="mt-3">
                        <input type="password" name="password_hash" class="form-control" placeholder="Contraseña" aria-label="password" aria-describedby="basic-addon1">
                    </div>
                    <div class="my-3 d-flex justify-content-between">
                        <a href="">Olvide mi contraseña</a>
                        <a href="registro.php">Registrarse</a>
                    </div>
                    
                    <?php 
                    include_once 'controlador/ControladorLogin.php'; 
                    ?>
                    <button type="submit" name="boton" value="enviado" class="btn btn-primary mt-3">Login</button>
                </form>
            </div>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>