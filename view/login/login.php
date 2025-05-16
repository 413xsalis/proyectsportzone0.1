<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view\login\styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>LOGIN SportZone 12344</title>
</head>

<body>
    <?php
        include ("models/conexion_bd.php");
        include ("controllers/controlador.php");


    ?>
    <section class="h-100 gradient-form" style="background-image: url('Fondodeporte.jpeg');
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                        <div class="text-center">
                                            <img src="logo_sportzone-edit.png" style="width: 150px;
                                        padding: 10px; opacity: 0.4; background: radial-gradient(circle at 20% 30%, rgb(3, 23, 138), transparent), 
                                        radial-gradient(circle at 70% 80%, rgb(5, 92, 24), transparent);
                                        border-radius: 10px; " alt="logo">

                                        </div>

                                        <div class="text-center">
                                            <h4 class="mt-1 mb-5 pb-1">¡Bienvenidos!</h4>
                                        </div>

                                        <form method="POST" action="../controllers/controlador.php">
                                            <p>Por favor inicia sesión con tu cuenta</p>

                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <input type="email" name="login" id="form2Example11" class="form-control"
                                                    placeholder="Digita tu usuario" />
                                                <label class="form-label" for="login">Usuario</label>
                                            </div>

                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <input type="password" name="contraseña" id="form2Example22" class="form-control" 
                                                   placeholder="Digita la contraseña"/>
                                                <label class="form-label" for="contraseña">Contraseña</label>
                                            </div>

                                            <div class="mb-4">
                                                <label for="roleSelect" class="form-label">Selecciona tu rol</label>
                                                <select id="roleSelect" class="form-select">
                                                    <option value="administrador">Administrador</option>
                                                    <option value="colaboradores">Colaboradores</option>
                                                    <option value="instructores">Instructores</option>
                                                </select>
                                            </div>

                                            <div class="text-center pt-1 mb-5 pb-1">
                                                <button data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                    type="submit">Login</button><br>

                                                <a class="text-muted" href="#!">¿Olvidaste tu contraseña?</a>
                                            </div>

                                            

                                        </form>

                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4">We are more than just a company</h4>
                                        <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>
</body>

</html>