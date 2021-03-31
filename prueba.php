
<!DOCTYPE html>
<html>
<head>
    <title>Registro Empleado</title>
    <!--BOOTSRAP-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/fa97207df5.js" crossorigin="anonymous"></script>

    <!-- Ajax y Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
</head>
<body>

<!-- Navbar -->
<nav class="container navbar navbar-expand-lg navbar-dark bg-dark">
 <img src="logo.svg" width="140" height="75">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#"><b>Bienvenido Cruck</b></a>
      <a class="nav-item nav-link active" href="#"><b>Inicio</b></a>
      <a class="nav-item nav-link active" href="#"><b>Catalogo</b></a>
    </div>
  </div>
</nav>
<br>
<!-- Navbar -->

<div>
    <form action="" id="formajax">
        <div class="container">
             <div class="row">
                <div class="col-md-12">
                     <h2>Registro</h2>
                     <b><p>Catalogo de empleados</p></b>
                     <hr class="mb-3">
                </div>
                     <!--Registro-->
                         <div class="col-md-4">
                            <label for="primNombre"> <b>Nombre</b> </label>
                                <input class="form-control" type="text" name="primNombre" id="primNombre" required>
                         </div>

                         <div class="col-md-4">
                            <label for="apellidoP"> <b>Apellido Paterno</b> </label>
                                <input class="form-control" type="text" name="apellidoP" id="apellidoP" required>
                         </div>

                         <div class="col-md-4">
                            <label for="apellidoM"> <b>Apellido Materno</b> </label>
                                <input class="form-control" type="text" name="apellidoM" id="apellidoM" required>
                         </div>
                     
                         <div class="col-md-4">
                            <label for="rfc"> <b>RFC</b> </label>
                                <input class="form-control" type="text" name="rfc" id="rfc" required>
                         </div>

                         <div class="col-md-4">
                             <label for="curp"> <b>CURP</b> </label>
                                 <input class="form-control" type="text" name="curp" id="curp" required>
                         </div>

                         <div class="col-md-4">
                            <label for="fN"> <b>Fecha Nacimiento</b> </label>
                                <input class="form-control" type="date" name="fN" id="fN" required>
                         </div>

                           
                         <div class="col-md-12">
                            <label for="puesto"> <b>Puesto</b> </label>
                                <select name="puesto" id="puesto" class="form-control">
                                    <option value="nadie">Selecciona un puesto</option>
                                    <option value="🟢Cruck🟢">🟢Cruck🟢</option>
                                    <option value="🔵Maquina🔵">🔵Maquina🔵</option>
                                    <option value="🟡Mastodonte🟡">🟡Mastodonte🟡</option>
                                </select>
                                <br>
                         </div>
                     <hr class="mb-3">
                     <div class=" col-md-4">
                        <button class="btn btn-success type="button" id="enviar"><i class="fas fa-paper-plane"></i></button>
                        
                        <button class="btn btn-success type="button" id="visualizar"><i class="far fa-eye"></i></button>
                        <br>
                    </div>
             </div>
        </div>
    </form>
</div>

<!--Consulta-->
<div id="visualizarr">

</div>

</body>
<script>
    $('#enviar').click(function(){

        $.ajax({
            url: 'pregistro.php',
            type: 'POST',
            data: $('#formajax').serialize(),
        })

        .done(function(res){    
            console.log("Simbiontes pai");
            
        })

        .fail(function(){
            console.log("chale F");
        })
    })
</script>

<script>
$('#visualizar').click(function(){
        
        $.ajax({
            url: 'pvisualizar.php',
        })
        
        .done(function(res){    
            console.log("Simbiontes pai");
            $('#visualizarr').html(res)
        })

        .fail(function(){
            console.log("chale F");
        })
    })
    
</script>
</html>