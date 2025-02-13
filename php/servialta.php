<?php
include("conexion.php");/*incluye la conexion a base de datos*/
$getmysql=new mysqlconex();/*declarar variable de la clase de conexion*/
$getconex=$getmysql->conex();/*llamar a la funcion de la variable*/
if(isset($_GET["pro"])){/*condicion que cuando se preciona el boton se ejecuta todo*/
   /*declaracion de variables*/
   $dependencia=$_GET['dependencia'];
   $no_empleado=$_GET['no_empleado'];
   $hora_entrada=$_GET['hora_entrada'];
    $hora_salida=$_GET['hora_salida'];
    $sueldo_quincenal=$_GET['sueldo_quincenal'];
    $fecha_pago=$_GET['fecha_pago'];
    $forma_pago=$_GET['forma_pago'];
    $tipo_banco=$_GET['tipo_banco'];
    $dias_laborales=$_GET['dias_laborales'];
    $fecha_ingreso=$_GET['fecha_ingreso'];
 /*crear variable para la incercion de datos*/  /*los signos de interrogacion son por proteccion para evitar inyeccion de codigo*/
 $query="INSERT INTO  servicios_publicos (hora_entrada,hora_salida,sueldo_quincenal,fecha_pago,forma_pago,tipo_banco,	dias_laborales,fecha_ingreso,actividades,no_empleado)";
/*verificacion de que los registros(llaves foraneas) existan*/
 $verificar =mysqli_query($getconex, "SELECT * FROM empleados WHERE no_empleado='$no_empleado' and dependencia='Servicios públicos'");
/*si verificar es igual a 0 se ejecuta la insercion de datos de forma correcta */
if (mysqli_num_rows($verificar) > 0) {
  // Verificar si ya existe en servicios_publicos
  $verificarr = mysqli_query($getconex, "SELECT * FROM servicios_publicos WHERE no_empleado='$no_empleado'");
  if (mysqli_num_rows($verificarr) > 0) {
      echo '<script>
              alert("Este usuario ya está registrado en servicios públicos.");
              window.location = "../dependecias/altaservi.php";
            </script>';
      exit();
  } else {
    // Verificar en obras_publicas
    $verificar2 = mysqli_query($getconex, "SELECT * FROM obras_publicas WHERE no_empleado='$no_empleado'");
    if (mysqli_num_rows($verificar2) > 0) {
        echo '<script> 
                alert("Este usuario ya está registrado en obras públicas.");
                window.location = "../dependecias/altaservi.php"; 
              </script>';
    }
      // Realizar la inserción
      $insertar = "INSERT INTO servicios_publicos (hora_entrada, hora_salida, sueldo_quincenal, fecha_pago, forma_pago, tipo_banco, dias_laborales, fecha_ingreso, no_empleado) 
                   VALUES ('$hora_entrada', '$hora_salida', '$sueldo_quincenal', '$fecha_pago', '$forma_pago', '$tipo_banco', '$dias_laborales', '$fecha_ingreso', '$no_empleado')";
      if (mysqli_query($getconex, $insertar)) {
          echo "<script> 
                  alert('El empleado [$no_empleado] se agregó correctamente.');
                  location.href='../dependecias/servicios_publicos.php'; 
                </script>";
      } else {
          echo '<script>
                  alert("No se pudo agregar al empleado.");
                  location.href="../dependecias/servicios_publicos.php";
                </script>';
      }
  }
}else{  echo '<script>
  alert("El empleado no existe o esta no es su dependencia.");
  location.href="../dependecias/servicios_publicos.php";
</script>';

}
}



mysqli_close($getconex);
?>

