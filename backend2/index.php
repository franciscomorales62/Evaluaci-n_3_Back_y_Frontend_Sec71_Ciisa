<!-- Nombre del grupo: Chanchito Feliz
Integrantes: 
Paulina Alejandra Olave Hernandez
Francisco Eduardo Morales López -->



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title >Terrasol Parcelas</title>
  <script src="js/modal.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


  <!-- barra de navegacion -->

  <nav class="container-fluid navbar-center navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Terrasol Parcelas Inmobiliaria</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">

        <?php
        include 'funciones.php';
        echo navbar(); // Llama a la función 
        ?>
        

      </div>
    </div>
  </nav>




<!-- inicio -->
<div class="container-fluid bg-primary-subtle">
  <div class="b-example-divider" id="Inicio"></div>
  <div class="container-fluid bg-primary-subtle">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-12 col-lg-6 text-center">
        <img src="assets/img/imagen-hero.jpg" class="img-fluid rounded mx-auto d-block" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-12 col-lg-6">
        <h1 class="text-justify display-5 fw-bold lh-1 mb-3 text-center">Inmobiliaria Las Terrazas</h1>
        <p class="lead text-justify text-center">Referente en el mercado inmobiliario de la zona centro sur de Chile, ofreciendo una oportunidad única para aquellos que buscan invertir en la naturaleza y la tranquilidad</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" onclick="location.href='#Contacto'" class="btn btn-outline-secondary btn-lg px-4 mx-auto">Contáctate con nosotros</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="b-example-divider"></div>



  <!-- nosotros -->
  <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" id="Nosotros">
    <div class="col-md-8 px-0 text-center container">
      <h1 class="display-4 font-italic text-center">Sobre Nosotros</h1><br>
      <p class="text-justify lead my-3 text-center">
    <?php
      mostrarNosotros();
    ?>
      </p>
    </div>
  </div>
  <hr>






  <!-- parcelas -->
  <div class="album py-5 bg-light">
    <div class="container">

      <section class="jumbotron text-center"><br>
        <div class="container">
          <h1 class="jumbotron-heading" id="Parcelas">Conozca nuestras parcelas</h1>
          <p class="lead text-muted">Vea lo que tenemos para ofrecerle</p><br>
        </div>
      </section>

      <div class="row">

        <?php
        mostrarTarjetaApi();
        ?>


        <hr>


        <!-- solo terreno -->
        <section class="jumbotron text-center"><br>
          <div class="container">
            <h1 class="jumbotron-heading" id="Solo terreno">Conozca los terrenos disponibles</h1>
            <p class="lead text-muted">En Terrasol Parcelas no solo ofrece tierras, sino también un estilo de vida.
              Con un enfoque en la transparencia, la comodidad y la accesibilidad financiera</p><br>
          </div>
        </section>

        <?php
        echo mostrarTerreno(0);
        echo mostrarTerreno(1);
        echo mostrarTerreno(2);

        ?>

      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <hr>


  <!-- casa en parcela -->
  <div class="b-example-divider"></div>
  <div class="container col-xxl-8 px-4 py-5 bg-info-subtle" id="Casa en parcela">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Casa en parcela</h1>
        <p class="lead text-justify"> Conscientes de las barreras que pueden enfrentar los
          compradores al buscar financiamiento tradicional, la empresa ofrece crédito directo sin
          necesidad de pasar por bancos, avales o requisitos complicados. Esta opción brinda a
          los clientes la libertad de realizar sus sueños de adquirir una parcela sin los obstáculos
          financieros típicos, convirtiendo la inversión en tierras en una posibilidad realista para
          una amplia gama de personas. </p>
      </div>
      <div class="col-10 col-sm-12 col-lg-6">
        <img src="assets\img\imagen-hero.jpg" class="d-block mx-lg-auto img-fluid rounded" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>

    </div>
  </div>
  <div class="b-example-divider" id="Preguntas Frecuentes"></div>
  <hr>


  <!-- preguntas frecuentes -->
  <div class="container-fluid bg-danger-subtle text-center">
    <h1 class="text-center">Preguntas Frecuentes</h1>
    <br>

    <?php

    mostrarPreguntas1()    


    ?>
  

    <br>
  </div>
  <hr><br><br>

  <!-- carrousel -->
  <h1 class="text-center">Testimonios</h1>
  <div id="textCarousel" class="carousel slide shadow-lg" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
          <div class="text-center">
            <h5 class="display-6 fw-bold">Son el mejor servicio inmobiliario <br>de Chile</h5>
            <p>Juan Pérez, arquitecto.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
          <div class="text-center">
            <h5 class="display-6 fw-bold">La atención al cliente es rápida</h5>
            <p>María Pérez, abogada</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
          <div class="text-center">
            <h5 class="display-6 fw-bold">Tienen los precios más económicos,<br> gracias a ellos compré mi parcela</h5>
            <p>Ignacio Donoso, Vendedor</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev bg-secondary" type="button" data-bs-target="#textCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-secondary" aria-hidden="true"></span>
      <span class="visually-hidden">anterior</span>
    </button>
    <button class="carousel-control-next bg-secondary" type="button" data-bs-target="#textCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
      <span class="visually-hidden">siguiente</span>
    </button>
  </div>
<br><br>
<hr>



  <!-- formulario -->
  <h1 class="text-center">Formulario de Contacto</h1>
  <h2 class="text-center">Todos los campos son obligatorios</h2>
  <div class="container bg-warning">

    <form id="Contacto" action="backend.php" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label text-center">Email</label><br>
        <input type="email" class="form-control" id="email" placeholder="Ingrese aquí su email" aria-describedby="emailHelp" required>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label text-center">Ingrese su nombre completo</label><br>
        <input type="text" class="form-control" id="nombre" placeholder="Ingrese aquí su nombre" required>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label text-center">Ingrese su dirección</label><br>
        <input type="text" class="form-control" id="direccion" placeholder="Ingrese aquí su dirección" required>
      </div>

      <div class="mb-3">
        <label for="parcela" class="form-label text-center">Ingrese una parcela de su interés</label><br>
        <input type="text" class="form-control" id="parcela" placeholder="Ingrese aquí su parcela">
      </div><br>

      <div class="form-floating">
        <textarea class="form-control" placeholder="Mensaje" id="mensaje" required></textarea>
        <label for="floatingTextarea">Escriba aquí su Mensaje</label>
      </div><br>

      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="checkbox" required>
        <label class="form-check-label" for="flexSwitchCheckDefault">Acepto los términos y condiciones</label>
      </div><br>



      <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
      <p id="advertencia"></p>
      <hr>
    </form>
  </div>

<hr>
  <!-- footer  -->
<div class="container-fluid text-light bg-dark">
  <footer class="py-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>Teléfono y Whatsapp</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><p class="nav-link p-0 text-light">+56 9 5018 6583</p></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Dirección</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><p class="nav-link p-0 text-light">Entre Talca y la Region de Los Lagos</p></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Redes Sociales</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="https://www.facebook.com/tuparcelaenelsurdechile?mibextid=ZbWKwL" class="nav-link p-0 text-body-light">Facebook</a></li>
          <li class="nav-item mb-2"><a href="https://www.instagram.com/terrasol_parcelas?igsh=eG51a2w4NGx5ODJu" class="nav-link p-0 text-body-light">Instagram</a></li>

        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        
          <h5>Cómo usamos las cookies</h5>
          <p>Las cookies nos permiten conocer cómo navegas nuestras páginas y mantener su funcionamiento. 
            Con esta información, hacemos que sea más fácil, rápido y seguro usar tu cuenta. 
            Si desactivas ciertas cookies, es posible que no puedas disfrutar de algunas funcionalidades de nuestros sitios.</p>
          
      </div>
    </div>
    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p class="fw-bold">&copy; 2024 Inmobiliaria Terrasol. Todos los derechos reservados.</p>
    </div>
  </footer>
</div>


<!-- modal de cookies -->
<div class="modal" id="cookiesModal" tabindex="-1" aria-labelledby="cookiesModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="cookiesModalLabel">Aceptar Cookies</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-dark">
          <p>Este sitio web utiliza cookies para garantizar que obtengas la mejor experiencia en nuestro sitio web.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Rechazar</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>




  
  <script src="js/validacion.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>