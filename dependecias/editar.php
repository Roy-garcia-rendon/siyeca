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
            <img src="media/Menu.png" class="Menu-icono" alt="">
        </label>

        <nav class="navbar">

            <ul>
            <li><a href="../obras.php">Empleados</a></li>
            <li><a href="modobras.php">Modificaciones</a> </li>
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
            <h2  style="color: black;">Modificación de empleados obras públicas</h2>
        </div>
        </div> 
       <div class="sy">
        <h1 style="color: black;">(SIYECA) </h1>
       </div>
       <?php

       $conexion=mysqli_connect("localhost","root", "","siyeca12");
      $isv=$_GET['is'];
       $select="SELECT * from obras_publicas where no_empleado='$isv'";
         ?>
   <!--Formulario de editar registros en alta empleados-->
            
            <img src="image/shutterstock-51313744_sm.webp" alt="">
        </div>
    </div>   <?php $resultado=mysqli_query($conexion,$select);
        while($row=mysqli_fetch_assoc($resultado)){?>
    <!--Formulario de obras publicas nomina-->
       <div class="form-content">
        <h2>Enviar tu solicitud</h2>
      

        <form action="" method="post" class="needs-validation" novalidate>

            <input type="hidden" name="no_empleado" value="<?php echo $row['no_empleado'];?>" >

            <label for="hora_entrada">Hora de entrada</label>
            <input type="time" name="hora_entrada" id="hora_entrada"  class="form-control" value="<?php echo $row['hora_entrada']; ?>" required>
    
            <label for="hora_salida">Hora de salida</label>
            <input type="time" name="hora_salida" id="hora_salida"  class="form-control" value="<?php echo $row['hora_salida']; ?>" required style="color: black;" >

            <label for="sueldo_quincenal">Sueldo quincenal</label>
            <input type="number" name="sueldo_quincenal" id="sueldo_quincenal" min="1000" max="15000" class="form-control" value="<?php echo $row['sueldo_quincenal']; ?>" required>

            <label for="num_tel">Fecha pago</label>
            <input type="date" name="fecha_pago" id="fecha_pago"value="<?php echo $row['fecha_pago']; ?>"  class="form-control" required >

            <label>Forma pago:</label>
            <div class="mydict">
	<div>
		<label>
			<input type="radio" name="forma_pago" value="Transferencia" <?php if ($row['forma_pago'] == 'Transferencia') echo 'checked'; ?>>
			<span>Transferencia</span>
		</label>
		<label>
			<input type="radio" name="forma_pago" value="Efectivo" <?php if ($row['forma_pago'] == 'Efectivo') echo 'checked'; ?>>
			<span>Efectivo</span>
		</label>	
	</div>
</div>
            <br>


            <label for="tipo_banco">Tipo banco:</label>
            <input type="text" name="tipo_banco" id="tipo_banco" class="form-control" value="<?php echo $row['tipo_banco']; ?>" required>
            <br>

            <label for="dias_laborales">Días laborales:</label>
            <input type="text" name="dias_laborales" id="dias_laborales" class="form-control"  value="<?php echo $row['dias_laborales']; ?>"required>

            <label for="fecha_ingreso">Fecha ingreso:</label>
            <input type="date" name="fecha_ingreso" id="fecha_ingreso"value="<?php echo $row['fecha_ingreso']; ?>" class="form-control" required>

            <label for="actividades">Actividades:</label>
            <input type="text" name="actividades" id="actividades"  class="form-control" value="<?php echo $row['actividades']; ?>"required>
     
   <br>
   <input type="submit" name="editar" value="Editar">
   <?php } ?>
   <?php
   /*declararcion de variables*/
         

   if (isset($_POST['editar'])) {
    $no_empleado = $_POST['no_empleado'];
    $hora_entrada = $_POST['hora_entrada'];
    $hora_salida = $_POST['hora_salida'];
    $sueldo_quincenal = $_POST['sueldo_quincenal'];
    $fecha_pago = $_POST['fecha_pago'];
    $forma_pago = $_POST['forma_pago'];
    $tipo_banco = $_POST['tipo_banco'];
    $dias_laborales = $_POST['dias_laborales'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $actividades = $_POST['actividades'];

    $quer = "UPDATE obras_publicas SET 
        hora_entrada='$hora_entrada', 
        hora_salida='$hora_salida', 
        sueldo_quincenal='$sueldo_quincenal', 
        fecha_pago='$fecha_pago', 
        forma_pago='$forma_pago',
        tipo_banco='$tipo_banco', 
        dias_laborales='$dias_laborales', 
        fecha_ingreso='$fecha_ingreso',
        actividades='$actividades'
        WHERE no_empleado='$no_empleado'";
        
    if ($conexion->query($quer)) {
        echo "<script>alert('El empleado [$no_empleado] se editó correctamente'); location.href='../obras.php';</script>";
    } else {
        echo "<script>alert('El empleado [$no_empleado] no se editó correctamente'); location.href='../obras.php';</script>" . $conexion->error;
    }
}

     /*cerrar base*/
    mysqli_close($conexion);
    
    ?>
        </form>
       
        
    </div>
    <script src="js/java.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>







