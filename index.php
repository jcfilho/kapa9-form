<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/index.css" />
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="form-congreso" id="id-form-congreso">
                        <div id="div-to-errors" class="text-danger"></div>
                        <div class="form-group">
<!--                            <label for="titulo">Título</label>-->
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Autores</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
<!--                                            <label for="autor_1_nombre">Nombre</label>-->
                                            <input type="text" class="form-control" id="autor_1_nombre"  name="autor_1_nombre" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
<!--                                            <label for="autor_1_apellido">Apellidos</label>-->
                                            <input type="text" class="form-control" id="autor_1_apellido" name="autor_1_apellido" placeholder="Apellidos">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!--                                            <label for="autor_2_nombre">Nombre</label>-->
                                            <input type="text" class="form-control" id="autor_2_nombre"  name="autor_2_nombre" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!--                                            <label for="autor_2_apellido">Apellidos</label>-->
                                            <input type="text" class="form-control" id="autor_2_apellido" name="autor_2_apellido" placeholder="Apellidos">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!--                                            <label for="autor_3_nombre">Nombre</label>-->
                                            <input type="text" class="form-control" id="autor_3_nombre"  name="autor_3_nombre" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!--                                            <label for="autor_2_apellido">Apellidos</label>-->
                                            <input type="text" class="form-control" id="autor_3_apellido" name="autor_3_apellido" placeholder="Apellidos">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <!--                            <label for="adscripcion">Adscripción</label>-->
                            <input type="text" class="form-control" id="adscripcion" name="adscripcion" placeholder="Adscripción">
                        </div>
                        <div class="form-group">
                            <!--                            <label for="ciudad">Ciudad</label>-->
                            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad">
                        </div>
                        <div class="form-group">
                            <!--                            <label for="email">Email</label>-->
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <!--                            <label for="resumen">Resumen</label>-->
                            <textarea type="text" class="form-control" id="resumen" name="resumen" placeholder="Resumen"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <script data-main="assets/js/main" src="assets/js/require.js"></script>
<!--        <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js" ></script>-->
<!--        <script type="text/javascript" src="assets/js/bootstrap.min.js" ></script>-->
<!--        <script type="text/javascript" src="assets/js/jquery.blockUI.js" ></script>-->
<!--        <script type="text/javascript" src="assets/js/index.js" ></script>-->
    </body>
</html>