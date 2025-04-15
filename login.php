<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container ">
        <p class="h1">SportZone</p>
        <div class="imgen">

            <div class="bg-danger text-right">
                <form method="post">
                    <p class="h2">Bienvenido Usuario</p>
                    <?php
                    include "conexion_bd.php";
                    include "controlador.php";


                    ?>

                    <div class="input-div one bg-primary">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div text-center">
                            <img src="data:image/webp;base64,UklGRjYFAABXRUJQVlA4TCkFAAAvuIAdAHXQorbNkCTl1dq2bdu2bY1t27Zt1xnbtrFj21Z150V3V2fGF5XXEX/EHxnR/wnww57yqJeuH53C0Bn9bvXSd9wvA6ndxV461zFQM0r3GqYlpX8H0piioEXI7ETRkI143SkqOuHGUHS0gi15MEIYFmrdaxQlXSzQgb8pWloWJlnZi5qVlSgdvehpBdngybBwtxnrDh6xNl6nuxWWAW0Q4sgDYJe8nm/0Cc6tGe0UgWkrwOniBH1X0Z7WD9ZqiqGouApv2A1QlWec4eD1DIJyw0Lb+qQH/Mbq4xyuVgRET5qQkkUIuJvm8LUFIpUMZzTh/riOxYwNDo0J5Sjh1jjIosaEQy6MmjhNM1lco3BsCLPugemSySIbDXPvrMBOlCDU1ix6KxSKTVAJQq3ni29RKBHQ/q9R8jGiQ9E2mGEe6JO7IXYrEBoWzO0o03zMaSi3B5LwQJufB3EGhBJBEOiHGxiVNAgF0A+lF+MalH65Ov0dyHuHgLQFcSo3Y24H6cjIFuT2MblI1vZAGRuEYpXasidASoNZkFil1p9A14NpEDIpHfwY5P6zYEaB2DiVFQRaJwmmNAiZVKqhzGR0QolTyCTUNXCEQianuSif74Qjg6JzyodS+gicLY3icsh4FKXJWTjjUB7NyG7WzSjdGN+i3Dwru5qEOlgChEK1ssnMD5OQQAJGmSxr349g76/NMuLqCOZGZOlCsIMkoGBIM/PRsjidDZyJcco65s2f4DQ6A6cNjlPMiwi3+GE4Ko5D2ucpQB/tgNtOQFM4oysQrYKLCdhknKmANAnOIVl97H2kykkwRUjvx4cI+ZqzYEYhkcailWArCWs91u9gDkuPx6ITUIawdV+wZlAaTDUHe3MnEBmw5pXAqBNQJwJXedCeWQrjnkEzX6NRldMgyhC6fgOOhoGQB//GY3h3boJwd+KZ6/Hoi0wAYwn/+sskQHkADEnQkRSrnhfMVSUpXigFqntOqHPkSfHCK+VARZMCKfLkaO6QBP29R5jYkiTveEkW9NQ0QaY96cky/kgaRA22CKBjkudHv0mEnp2wPyRrYpLob8VkQvTPoJMhWOVIqsXqyoWu/qjegYAOWHKeXOt2lEzWFzpsOn0uIwU6p1wH68m34wgJZf210eBpK1YrZZga/erJ2S2UVDpUuyMbH4xs8ZFHI9qj9lSeiGbc+WYRTTt/aETTzLMimmVe83Qks2uY9xr5XPHkO9/9aQoXyxob7dSTV8jH7GVONpHL20WadU/MXL33ZNLPXtm9qynhdJFYLk2SPnNfeVxZadjctQcy/WDNgbWa1JXy6Osz88zHJFFl2V7LYVu1zEjisZlZDv8qgfv/XMriOq0k8OvhLFwe7YJf2uxjsckoi1aes+1zEVaJxFFffDckxrqoT3Y770f6e8oRxrT0N5LamR0/BjT7BOMaB/QY59gb5eZOPnoni9I7p0MgpTYyviUQnRO/ivDA0DO+DPXQBxBe9VMcBpBnMcvS5AEYlspW8eofZ3lqJ55J5XRdwR4a4cvVPSRYXZUKzxHr3WUsW0VixZzy3n9F+nMTy9dpkdTe1Li9QH/t9mW82wik/FyufUOYz0/5cnZGmDfW5oZLi/IZy1uLYjnX2wQxvsyNINtyx/mE+Hmv1FQshOMAt4vwyTqWe+xE2B4EFwvvruks+/iu8CwHuiW8/ix/E54O5mzzsMpxOtRhmbPB8Jo3w/nmdFpQJpw313DQrUO5YwGnR2dDac2Bq0/D6MXp0oQRq9QAAA=="
                                class="img-thumbnail" alt="...">
                            <h5>Usuario</h5>
                            <div class="mb-3">
                                <label  for="exampleFormControlInput1"  class="input">Email address</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" 
                                    placeholder="name@example.com">
                            </div>
                        </div>
                    </div>
                    <div class="input-div pass text-center">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <label for="input" class="form-label">Contraseña</label>
                            <input type="password" id="input" class="input" name="password"
                                aria-describedby="passwordHelpBlock">
                            <div id="passwordHelpBlock" class="form-text">
                                Su contraseña debe tener entre 8 y 20 caracteres, contener letras y números, y no debe
                                contener espacios, caracteres especiales ni emojis.
                            </div>
                        </div>
                    </div>

                    <div class="view">
                        <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
                    </div>

                    <div class="text-center">
                        <a class="font-italic isai5" href=""><em>Olvide mi Contraseña</em></a>
                    </div>
                    <div class="text-center">
                        <input name="botoningresar" class="boton" type="submit" value="INICIAR SESION">
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
            crossorigin="anonymous"></script>
</body>

</html>