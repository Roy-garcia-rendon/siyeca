<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/www.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/c6.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="icon" type="image/x-icon" href="mediaa/icons8-favicon-16 (1).png">
    
    <title>SIYECA</title>
</head>
<!--script cerrar sesion-->
<script>
    function confirmacion(){
        var respuesta=confirm("¿Desea cerrar tu sesión??");
        if(respuesta == true){
            return true;
        }else{
            return false;
        }
    }
</script>
<body>
    <style>body{background-image: url(../mediaa/maxresdefault.jpg);
    background-size: cover;
    background-attachment: fixed;}
    </style>
    <main id="principal">
        <header>
    <div class="Menu container">
        <a href="#" class="logo">AYUNTAMIENTO</a>
        <input type="checkbox" id="Menu">
        <label for="Menu">
            <ing src="../mediaa/Menu.png" class="Menu-icono" alt="">
        </label>

        <nav class="navbar">

            <ul>
            <li><a href="servicios_publicos.php">Empleados servicios</a></li>
            <li><a href="modservi.php">Modificaciones servicios</a> </li>
            <li><a href="../index.php" onclick='return confirmacion()'>Salir</a></li>
            </ul>

        </nav>

    </div>   

    </header>
    <div class="contentcontainer">

        <div class="content" id = "content">
        </div class="wrapper">
        <img src="../mediaa/images.jpg" alt=" " width="10%" height="10%"> 
        <div class="text-box">
            <h2 style="color: black;">Altas de empleados Servicio público</h2>
        </div>
        </div> 
       <div class="sy">
        <h1 style="color: black;">(SIYECA) </h1>
       </div>
            
            
            <img src="../image/shutterstock-51313744_sm.webp" alt="">
        </div>
    </div> 
    <!--Formulario de obras publicas nomina-->
       <div class="form-content">
        <h2>Enviar tu solicitud</h2>
        <form  action="../php/servialta.php" método="GET" class="needs-validation" >
            <label for="hora_entrada">Hora de entrada</label>
            <input type="time" name="hora_entrada" id="hora_entrada"  class="form-control" required>
    
            <label for="hora_salida">Hora de salida</label>
            <input type="time" name="hora_salida" id="hora_salida"  class="form-control" required style="color: black;" >

            <label for="sueldo_quincenal">Sueldo quincenal</label>
            <input type="number" name="sueldo_quincenal" id="sueldo_quincenal" min="1000" max="300000" class="form-control" required>

            <label for="fecha_pago">Fecha pago</label>
            <input type="date" name="fecha_pago" id="fecha_pago"  class="form-control" required style="color: black;">

            <label>Forma pago:</label>
            <div class="mydict">
	<div>
		<label>
			<input type="radio" name="forma_pago" value="Transferencia">
			<span>Transferencia</span>
		</label>
		<label>
			<input type="radio" name="forma_pago" value="Efectivo">
			<span>Efectivo</span>
		</label>	
	</div>
</div>
            <br>

            <label for="tipo_banco">Tipo banco:</label>
            <input type="text" name="tipo_banco" id="tipo_banco" class="form-control" required>
            <br>

            <label for="dias_laborales">Días laborales:</label>
            <input type="text" name="dias_laborales" id="tipo_banco" class="form-control" required>

            <label for="fecha_ingreso">Fecha ingreso:</label>
            <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" required>

            <label for="actividades">Actividades:</label>
            <input type="text" name="Actividades" id="actividades" class="form-control" required>

            <label for="nom">Número de empleado:</label>
            <input type="text" name="no_empleado" id="no_empleado" class="form-control" required>



        
   <br>
   <input class="btn" type="submit" value="Registrar">
   <input type="hidden" name="pro" value="pro">


       
        </form>
       
        
    </div>
    <script src="js/java.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>