<?php 
include("conexion.php");/*Incluye la base de datos (archivo conexion.php)*/
$getmysql=new mysqlconex();/*Declara la variable de la clase mysqlconex*/
$getconex=$getmysql->conex();/*llamar a la funcion de la variable*/

if(isset($_GET["eliminar"]))/*la accion se realisara siempre y cuando se precione el boton*/{
    /*declaracion de variables*/
    $no_empleado=$_GET['no_empleado'];
    $hora_entrada['hora_entrada'];
     $hora_salida=$_GET['hora_salida'];
     $sueldo_quincenal=$_GET['sueldo_quincenal'];
     $fecha_pago=$_GET['fecha_pago'];
     $forma_pago=$_GET['forma_pago'];
     $tipo_banco=$_GET['tipo_banco'];
     $dias_laborales=$_GET['dias_laborales'];
     $fecha_ingreso=$_GET['fecha_ingreso'];
/*crear variable para la eliminacion de datos*/  
   $query ="DELETE FROM  servicios_publicos WHERE no_empleado=?";
   /*preparar sentencia, ingresando el getconex y query*/
   $sentencia = mysqli_prepare($getconex,$query);
   /*ingresar parametros con la funcion mysqli_stmt_bind_param*/ /*ingresamos sentencia e identificar los tipos de datos (strean=s INT=i Dogle=D*/
   mysqli_stmt_bind_param($sentencia,"i",$no_empleado);
   /*realizar ejecucion*/
   mysqli_stmt_execute($sentencia);
   /*declarar variable afectado con la funcion mysqli stmt affected rows*/
   $afectado=mysqli_stmt_affected_rows($sentencia);
   if($afectado==1){/*si afectados es igual a 1 se despliega la siguiente alerta*/
    echo"<script> alert('EL empleado [$no_empleado,$nombre]  se elimino correctamente'); location.href='../dependecias/servicios_publicos.php'; </script>";
   }else{/*sino se despliega la siguiente alerta*/
    echo"<script> alert('EL empleado [$no_empleado,$nombre] no elimino correctamente'); location.href='../dependecias/servicios_publicos.php'; </script>";
   }
}
/*cierre de la base*/
mysqli_stmt_close($sentencia);
mysqli_close($getconex);
?>

