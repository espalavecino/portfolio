<?php $pg = "contacto"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="stylesheet" href="CSS/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="CSS/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="container">
        <?php
        
        include_once("menu.php")
        
        ?>
        </header>
        <section id="contacto">
            <div class="row">
                <div class="col-12 py-5">
                    <h1>¡Trabajemos juntos!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-12">
                    <h2>Para más detalles sobre mi<br> trabajo podés ver mi
                        <a href="https://www.linkedin.com/in/esteban-palavecino-06354a120/" target="_blank">
                        Linkedin,</a><br> descargar mi CV o mandarme<br> un mensaje.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-10">
                    <form action=" " method="post">
                        <div class="row">
                            <div class="col-sm-6 col-12 py-2">
                                <input type="text" placeholder="NOMBRE" class="form-control">
                            </div>
                            <div class="col-sm-6 col-12 py-2">
                                <input type="email" placeholder="CORREO" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-12 py-2">
                                <input type="text" placeholder="ASUNTO" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 py-2">
                                <textarea placeholder="MENSAJE" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="my-2 mx-auto">
                                <button type="submit" class="btn">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </div>
    <footer>
        <div class="container">
            <div class="row py-5">
                <div class="col-sm-4 col-12 text-sm-left text-center">
                    <a href="index.php">&#169;Todos los derechos reservados<br>2020</a>
                </div>
                <div class="col-sm-4 col-12 text-center py-4 py-sm-0">
                    <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-github"></i></a>
                </div>
                <div class="col-sm-4 col-12 text-sm-right text-center">
                    Patrocinado por<br><a href="https://depcsuite.com" target="_blank">DePC Suite</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>