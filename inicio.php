<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Document</title>
    <title>Grid Layout</title>
</head>

<body>
    <div class="grid-layout">


        <nav class="navbar navbar-expand-sm bg-body-tertiary">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#">Sport Zone</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">integrantes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Usuarios</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid  row bg-primary">
            <div class="col-1">
                <div class="btn-group-vertical d-flex justify-content-center align-items-center mt-auto"  role="group"
                    aria-label="Vertical button group">
                    <button type="button" class="btn btn-primary">Pagos</button>
                    <button type="button" class="btn btn-primary">Nuevos Ingresos</button>
                    <button type="button" class="btn btn-primary">Materiales</button>
                    <button type="button" class="btn btn-primary">Button</button>
                </div>
                <script>
                    const botonAlternar = document.getElementById("boton-alternar");
                    const contenedorBotones = document.getElementById("contenedor-botones");

                    botonAlternar.addEventListener("click", () => {
                        contenedorBotones.classList.toggle("d-none");
                    });
                </script>
            </div>
            <div class="col-9">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="data:image/jpeg;base64,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"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="container-fluid caja c5 bg.primary">

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>