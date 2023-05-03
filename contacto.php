<?php include("Template/header.php") ?>
<!-- main -->
<!-- 
    Esta es la pagina principal, en la cual se incluyen el header y el footer
    con php
-->
<div style="height:600px;background-color:grey;background-image:url('img/BG_usuarios.jpg');background-repeat: no-repeat;background-size: cover;" >

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-justify">
                <div class="contact_title  wow fadeInUp animated">
                    <h1>Pongamonos en contacto</h1>
                    <img src="images/shape.png" alt="">
                    <p>Envianos tus dudas o consultas para poder comunicarnos</p>
                </div>
            </div>
        </div>
    </div>
        
    <div class="container">
        <div class="row">
            <div class="col-md-3  wow fadeInLeft animated">
                <div class="single_contact_info">
                    <h2>Llamanos</h2>
                    <p>+56 9 123 45678</p>
                    <p>+56 9 987 65431</p>
                </div>
                <div class="single_contact_info">
                    <!--<h2>Nuestros Correos</h2>
                        <p>1° "A" carlifernandez23@gmail.com</p> 
                    <p>1° "B" judythvallejosb@gmail.com</p>-->
                </div>
                <!-- <div class="single_contact_info"> -->
                    <!-- <h2>Address</h2> -->
                    <!-- <p>216 Street Address, Barisal, BD</p> -->
                <!-- </div> -->
            </div>

            <div class="col-md-9  wow fadeInRight animated" style=" background-color: lightgrey;opacity:0.8;text-align:center;padding-top: 30px;">
                <!-- <form action="envia.php" method="post" class="form-consulta">  -->
                <form action="envia.php" method="post" class="contact-form"> 
                <!-- <form class="contact-form" action="envia.php" method="post"> -->
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" placeholder="Nombre" name="nombre">
                            </br>
                            <input type="email" class="form-control" id="email" placeholder="Correo" name="email">
                            <!-- <input type="text" class="form-control" id="subject" placeholder="Asunto" name="asunto"> -->
                        </div>
                        <div class="col-md-6">
                            <textarea class="form-control" id="message" rows="10" cols="10" placeholder="Texto del Mensaje..." name="consulta"></textarea>
                            <!-- <button type="button" class="btn btn-default submit-btn form_submit">Enviar Mensaje</button> -->
                            </br>
                            <input type="submit" value="Enviar Mensaje" class="btn-default">
                            </br>
                        </div>
                    </div>
                    </br>
                </form>
            </div>
        </div>
    </div>

</div>
<br>
<?php include("Template/footer.php") ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>