<!--Section: Contact v.1-->
<section class="section mb-4">

    <div class="row">

        <!--First column-->
        <div class="col-md-5">



            <!--Form with header-->
            <div class="card">

                <div class="card-block">
                    <form action="" method="post">
                    <!--Header-->
                    <div class="form-header mdb-color">
                        <h3><i class="fa fa-envelope"></i> Escríbenos:</h3>
                    </div>

                    <!--Body-->
                    <?php  
                            if (isset($_POST['enviar'])) {
                                $stmt = $conn->prepare('INSERT INTO mensajes (asunto,contenido,mail,nombre,data_envio,hora_envio,leido,contestado) VALUES (:asunto,:contenido,:mail,:nombre,:data_envio,:hora_envio,:leido,:contestado)');
                                $rows=$stmt->execute(array(':asunto'=>$_POST['tema'],':contenido'=>$_POST['contenido'],'mail'=>$_POST['mail'],'nombre'=>$_POST['nombre'],':data_envio'=>date("Y-m-d"),'hora_envio'=>date("h:i:s"),':leido'=>0,':contestado'=>0));
                                if($rows==1){
                                    echo "mensaje enviado correctamente a las ".date("Y-m-d");
                                }
                                else{
                                    echo "se ha producido un error al enviar el mensaje";
                                }    
                            }
                            else {

                    ?>
                    <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" id="form3" class="form-control" name="nombre">
                        <label for="form3">Nombre y Apellidos</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="text" id="form2" class="form-control" name="mail">
                        <label for="form2">Email</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-tag prefix"></i>
                        <input type="text" id="form32" class="form-control" name="tema">
                        <label for="form32">Asunto del Mensaje</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-pencil prefix"></i>
                        <textarea type="text" id="form8" class="md-textarea" name="contenido"></textarea>
                        <label for="form8">Comentarios/label>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary btn-lg waves-effect waves-light" type="submit" name="enviar">Enviar</button>
                    </div>
                    <?php } ?>
                    </form>
                </div>

            </div>
            <!--/Form with header-->

        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-7">

            <!--Google map-->
            <div id="map-container" class="z-depth-1-half map-container" style="height: 400px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d623.505408772834!2d2.822846421481946!3d41.98077912529389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x54a7c5e076df5c4a!2smasias+rusticas+girona!5e0!3m2!1ses!2ses!4v1498043267467" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen ></iframe>
            </div>

            <br>
            <!--Buttons-->
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="fa fa-map-marker fa-2x"></i>
                    <p>Passeig General Mendoza, 3, 17002 Girona</p>
                    <p>España</p>
                </div>

                <div class="col-md-4">
                    <i class="fa fa-phone fa-2x"></i>
                    <p>+ 34 972 567 892</p>
                    <p>Lunes a Domingo, 24 horas abierto</p>
                </div>

                <div class="col-md-4">
                    <i class="fa fa-envelope fa-2x"></i>
                    <p>info@gmail.com</p>
                    <p>sale@gmail.com</p>
                </div>
            </div>

        </div>
        <!--/Second column-->

    </div>

</section>


<!--/Section: Contact v.1-->
