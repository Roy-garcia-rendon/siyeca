<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/www.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/c6.css">
    <link rel="icon" type="image/x-icon" href="../mediaa/icons8-favicon-16 (1).png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

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
<!--script confirmar datos a editar-->
<script>
    function confi(){
        var respuesta=confirm("¿Has verificado los datos?");
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
        <input type="" id="Menu">
        <label for="Menu">
            <ing src="" class="Menu-icono" alt="">
        </label>

        <nav class="navbar">

            <ul>
            <li><a href="../empleados.php">Empleados</a></li>
            <li><a href="../eliminar.php">Modificaciones</a> </li>
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
            <h2 style="color: black;">Modificación de empleados siyeca</h2>
        </div>
        </div> 
       <div class="sy">
        <h1 style="color: black;">(SIYECA) </h1>
       </div>
            
            
            <img src="image/shutterstock-51313744_sm.webp" alt="">
        </div>
    </div> 
       <div class="form-content">
        <h2>Enviar tu solicitud</h2>
        <?php
         /*declararcion de variables*/
    $no_empleado=$_GET['no_empleado'];
    $nombre=$_GET['nombre'];
    $edad=$_GET['edad'];
    $curp=$_GET['curp'];
    $num_tel=$_GET['num_tel'];
    $nacionalidad=$_GET['nacionalidad'];
    $genero=$_GET['genero'];
    $direccion=$_GET['dirreccion'];
    $profesion=$_GET['profesion'];
    $ocupacion=$_GET['ocupacion'];
    $tipo_de_sangre=$_GET['tipo_de_sangre'];
    $rfc=$_GET['rfc'];
    $estado_civil=$_GET['estado_civil'];
    $tel_emergencia=$_GET['tel_emergencia'];
    $dependencia=$_GET['dependencia'];

    if(isset($_GET['editar2' /*la accion se realisara al precionar el boton*/])){
        include("conexion.php"); /*Incluye la coneccion a la base de datos (archivo conexion.php)*/
        $getmysql=new mysqlconex();
        $getconex=$getmysql->conex();

        $query="UPDATE empleados SET nombre=?,edad=?,curp=?,num_tel=?,nacionalidad=?,genero=?,dirreccion=?,profesion=?,ocupacion=?,tipo_de_sangre=?,rfc=?,estado_civil=?,tel_emergencia=?,dependencia=? WHERE no_empleado=?";
          $sentencia = mysqli_prepare($getconex,$query);
          mysqli_stmt_bind_param($sentencia,"ssssssssssssssi",$nombre,$edad,$curp,$num_tel,$nacionalidad,$genero,$direccion,$profesion,$ocupacion,$tipo_de_sangre,$rfc,$estado_civil,$tel_emergencia,$dependencia,$no_empleado);
          mysqli_stmt_execute($sentencia);
          $afectado=mysqli_stmt_affected_rows($sentencia);
          if($afectado==1) /*la variable afectado al ser igual a 1 despliega la sigiente alerta*/{
         echo"<script> alert('EL empleado [$no_empleado,$nombre]  se edito correctamente'); location.href='../eliminar.php'; </script>";
        }else{ /*si no enj afectado despliega la siguente alerta*/
        echo"<script> alert('EL empleado [$no_empleado,$nombre] no se edito correctamente'); location.href='../eliminar.php'; </script>";
    }
     /*cerrar base*/
    mysqli_stmt_close($sentencia);
    mysqli_close($getconex);
    
    }
    ?>
   <!--Formulario de editar registros en alta empleados-->
<!--echo te mostrara los registros de la base de datos en los campos correspondientes-->
        <form  action="editar.php" método="GET" class="needs-validation" novalidate>
            <input type="hidden" value="<?php echo $no_empleado ?>" name="no_empleado" >

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre"  value="<?php echo $nombre ?>" style="color: black;">
    
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" value="<?php echo $edad ?>" min="18" max="60"  style="color: black;" >

            <label for="curp">CURP</label>
            <input type="text" name="curp" id="curp" maxlength="18" minlength="18"    value="<?php echo $curp ?>" style="color: black;">

            <label for="num_tel">Número de teléfono</label>
            <input type="number" name="num_tel" id="num_tel" max="9000000000" min="1000000000"   style="color: black;"  value="<?php echo $num_tel ?>">

            <label>Nacionalidad:</label>
            <div class="mydict">
	<div>
		<label>
			<input type="radio" name='nacionalidad' value="Mexicano" <?php if($nacionalidad == 'Mexicano') echo 'checked'; ?>>
			<span>Mexicano</span>
		</label>
		<label>
			<input type="radio" name='nacionalidad' value="Extranjero" <?php if($nacionalidad == 'Extranjero') echo 'checked'; ?>>
			<span>Extranjero</span>
		</label>
	</div>
</div>

            <br>

            <label>Género:</label>
            <div class="mydict">
	<div>
		<label>
			<input type="radio" name="genero" value="Mujer" <?php if($genero == 'M') echo 'checked'; ?>>
			<span>Mujer</span>
		</label>
		<label>
			<input type="radio" name="genero" value="Hombre" <?php if($genero == 'H') echo 'checked'; ?>>
			<span>Hombre</span>
		</label>
		<label>
			<input type="radio" name="genero" value="Otro" <?php if($genero == 'O') echo 'checked'; ?>>
			<span>Otro</span>
		</label>
		
	</div>
</div>


            <label for="direccion">Dirección:</label>
            <input type="textarea" name="dirreccion" value="<?php echo $direccion ?>" style="color: black;">

            <label for="Profesión">Profesión:</label>
            <input type="text" name="profesion" id="profesion"   value="<?php echo $profesion ?>" style="color: black;">

            <label for="Ocupación">Ocupación:</label>
            <input type="text" name="ocupacion" id="ocupacion"   value="<?php echo $ocupacion ?>" style="color: black;">

            <label for="Tipo_de_sangre">Tipo de sangre</label>
            <select name="tipo_de_sangre" id="tipo_de_sangre" >
                <option value="<?php echo $tipo_de_sangre ?>" hidden selected><?php echo $tipo_de_sangre ?></option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>

            </select>

            <label for="rfc">RFC</label>
            <input type="text" name="rfc" id="rfc" maxlength="13" minlength="13"  value="<?php echo $rfc ?>" style="color: black;">
             
            <label>Estado civil</label>
            <div class="mydict">
	<div>
		<label>
			<input type="radio" name="estado_civil" value="casado" <?php if($estado_civil == 'casado') echo 'checked'; ?>>
			<span>Casado</span>
		</label>
		<label>
			<input type="radio" name="estado_civil" value="soltero" <?php if($estado_civil == 'soltero') echo 'checked'; ?>>
			<span>Soltero</span>
		</label>	
	</div>
    <div>
		<label>
			<input type="radio" name="estado_civil" value="divorciado" <?php if($estado_civil == 'divorciado') echo 'checked'; ?>>
			<span>Divorciado</span>
		</label>
		<label>
			<input type="radio" name="estado_civil" value="viudo" <?php if($estado_civil == 'viudo') echo 'checked'; ?>>
			<span>Viudo</span>
		</label>	
	</div>
    <div>
		<label>
			<input type="radio" name="estado_civil" value="union libre" <?php if($estado_civil == 'unión libre') echo 'checked'; ?>>
			<span>Unión libre</span>
		</label>	
	</div>
</div>
            <br>

            <label for="tel_emergencia">Número de emergencia</label>
            <input type="number" name="tel_emergencia" id="tel_emergencia" max="9000000000" min="1000000000" class="form-control" required style="color: black;"  value="<?php echo $tel_emergencia ?>">

            <label for="dependencia">Área o dependencia a trabajar</label>
            <select name="dependencia" id="dependencia">
                <option  value="<?php echo $dependencia ?>" hidden selected><?php echo $dependencia ?></option>
                <option value="Obras públicas">Obras públicas</option>
                <option value="Servicios públicos">Servicios públicos</option>
            </select>
        
   <br>
   <input type="submit" name="editar2" value="Editar" onclick='return confi()'>
        </form>
       
        
    </div>
    <script src="js/java.js"></script>
</body>
</html>