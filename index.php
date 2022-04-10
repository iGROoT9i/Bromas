<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pure CSS Animated Background</title>
    <link rel="stylesheet" media="all" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <?php
    $count = json_decode(file_get_contents("http://api.icndb.com/jokes/count"));
    $categorias = json_decode(file_get_contents("http://api.icndb.com/categories"));

    $leng = implode(",", $categorias->{'value'});

    ?>

    <div class="info">
        <p>Actualmente tenemos <strong> <?php print $count->{'value'}; ?> </strong> bromas.<br>Categorias : <?php print $leng; ?></p>
    </div>


    <div class="button start" id="enviar">BROMA RANDOM!</div>


    <div class="context" id="respuesta">
        <h1>Bromas de Chuck Norris</h1>

    </div>


    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>




    <!-- Button bromas cambiando nombre y apellido -->
    <div class=" button2 rerun hidden" data-bs-toggle="modal" data-bs-target="#exampleModal">Character</div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cambiar de Personaje</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3 align-items-center">

                        <div class="col-auto">
                            <input type="text" id="nombre" class="form-control" aria-describedby="passwordHelpInline" placeholder="Nombre">
                        </div>

                        <div class="col-auto">
                            <input type="text" id="apellido" class="form-control" aria-describedby="passwordHelpInline" placeholder="Apellido">
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="character" data-bs-dismiss="modal">Enviar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Boton bromas random varios -->
    <div class=" button2 varios hidden" data-bs-toggle="modal" data-bs-target="#variosModal">Varios</div>


    <!-- Modal -->
    <div class="modal fade" id="variosModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cantidad de chistes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3 align-items-center">

                        <div class="col-auto">
                            <input type="number" id="cantidad" class="form-control" aria-describedby="passwordHelpInline" placeholder="Cantidad">
                        </div>



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="varios" data-bs-dismiss="modal">Enviar</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Boton bromas random categoria -->
    <div class=" button2 categoria hidden" data-bs-toggle="modal" data-bs-target="#categoriaModal">Categoria</div>


    <!-- Modal -->
    <div class="modal fade" id="categoriaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Por Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3 align-items-center">





                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="selection">
                            <option selected disabled>Categoria</option>

                            <?php
                            foreach ($categorias->{'value'} as $val) {

                                print '<option value="' . $val . '">' . $val . '</option>';
                            }
                            ?>

                        </select>



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="categoria" data-bs-dismiss="modal">Enviar</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Boton bromas random ID -->
    <div class=" button2 numero hidden" data-bs-toggle="modal" data-bs-target="#numeroModal">Numero de Broma</div>


    <!-- Modal -->
    <div class="modal fade" id="numeroModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Por Numero</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3 align-items-center">


                        <div class="col-auto">
                            <input type="number" id="numero" class="form-control" aria-describedby="passwordHelpInline" placeholder="0">

                        </div>




                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="idd" data-bs-dismiss="modal">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <div class=" button3 hidden">_</div>



    <script>
        $('#enviar').click(function() {

            $.ajax({
                    url: 'random.php',
                    type: 'POST',
                    data: '',
                })
                .done(function(res) {
                    $('#respuesta').html(res)
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });

        });

        $('#character').click(function() {
            var Nombre = document.getElementById('nombre').value;
            var Apellido = document.getElementById('apellido').value;

            var datos = "Nombre=" + Nombre + "&Apellido=" + Apellido;

            if (Nombre == "" || Apellido == "") {
                alert("Datos incorrectos");
            } else {
                $.ajax({
                        url: 'character.php',
                        type: 'POST',
                        data: datos,
                    })
                    .done(function(res) {
                        $('#respuesta').html(res)
                    })
                    .fail(function() {
                        console.log("error");
                    })
                    .always(function() {
                        console.log("complete");
                    });
            }



        });


        $('#varios').click(function() {
            var Cantidad = document.getElementById('cantidad').value;

            var datos = "Cantidad=" + Cantidad;

            if (Cantidad == "") {
                alert("Cantidad incorrecta");
            } else {
                $.ajax({
                        url: 'varios.php',
                        type: 'POST',
                        data: datos,
                    })
                    .done(function(res) {
                        $('#respuesta').html(res)
                    })
                    .fail(function() {
                        console.log("error");
                    })
                    .always(function() {
                        console.log("complete");
                    });
            }



        });


        $('#categoria').click(function() {
            var cat = document.getElementById('selection').value;
            var n = 0;
            var datos = "Categoria=" + cat;


            if (cat == "Categoria") {
                alert("Seleccione una categoria");

            } else {

                $.ajax({
                        url: 'categoria.php',
                        type: 'POST',
                        data: datos,
                    })
                    .done(function(res) {
                        $('#respuesta').html(res)
                    })
                    .fail(function() {
                        console.log("error");
                    })
                    .always(function() {
                        console.log("complete");
                    });
            }

        });

        $('#idd').click(function() {
            var Num = document.getElementById('numero').value;

            var datos = "Numero=" + Num;


            if (Num == "") {
                alert("Numero incorrecto");
            } else {

                $.ajax({
                        url: 'numero.php',
                        type: 'POST',
                        data: datos,
                    })
                    .done(function(res) {
                        $('#respuesta').html(res)
                    })
                    .fail(function() {
                        console.log("error");
                    })
                    .always(function() {
                        console.log("complete");
                    });
            }


        });
    </script>
</body>

</html>