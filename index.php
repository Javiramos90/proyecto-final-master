<?php
include './vistas/encabezado.php';
?>

<body>
    <header>
        <?php
        include './vistas/navbar.php';
        ?>
        <div class="img-container">
            <div class="img-portada">
                <div>
                    <h1 class="titulo">Descubre España<br>Sin Rumbo Fijo</h1>
                </div>
                <div class="slide"
                    style="background-image: radial-gradient(circle, rgba(52, 128, 58, 0), rgba(252, 252, 252, 0)), url('Imagenes/portada/portada-mochilas.jpg');">
                </div>
                <div class="slide"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('Imagenes/portada/portada-montaña.jpg');">
                </div>
                <div class="slide"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('Imagenes/portada/portada_desierto2.jpg');">
                </div>
                <div class="slide"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('Imagenes/portada/portada_montana_nevada2.jpg');">
                </div>
                <div class="slide"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('Imagenes/portada/portada_playa2.jpg');">
                </div>
            </div>
        </div>
    </header>
    <main>
        <h2>
            Te invitamos a explorar España como nunca antes. Descubre pueblos encantadores, playas
            escondidas, rutas de montaña y la vibrante cultura española. Te llevamos a través de cada rincón de este
            país diverso, con consejos, historias y recomendaciones para que tu aventura en España sea inolvidable
        </h2>

        <h3>¡BIENVENID@ A PROXIMO DESTINO!</h3>

        <div class="mapa">
            <?php
            include_once "mapa.html";
            ?>
        </div>
    </main>
    <footer>
        <div class="endPage">
            <div class="formNombre">
                <p>Nombre</p>
                <input type="text" placeholder="Nombre/Name">
            </div>
            <div class="formEmail">
                <p>Correo</p>
                <input type="email" placeholder="Correo Electronico/Email">
            </div>
        </div>
        <div class="botonFormulario">
            <button class="btn-form">¡Suscribirme!</button>
            <div class="check">
                <input type="checkbox">
                <p>&nbsp;He leido y acepto la Politica de Privacidad</p>
            </div>
            <div class="politica">
                <!--Enlace para ventana modal de politica de privacidad  -->
                <p>Los datos de carácter personal serán tratados de forma segura, cumpliendo con el RGPD (Reglamento
                    General de Protección de Datos). Podrás ejercer tus derechos de acceso, rectificación, limitación y
                    eliminación definitiva de los datos. Más información en nuestra &nbsp;<button class="open-modal-btn"
                        onclick="openModal()">política de privacidad.</button></p>
            </div>
        </div>
    </footer>
    <script src="js/principal.js"></script>
</body>

</html>