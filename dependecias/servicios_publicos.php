<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/c10.css">
    <title>empleados</title>
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
<style>body{
    background-image: url(../mediaa/San\ Juan.jpg);
        background-size: cover;
        background-attachment: fixed;}
        </style>
        <main id="principal">
            <header>
                <div class="Menu container">
                    <a href="#" class="logo">AYUNTAMIENTO</a>
                        <ing src="media/Menu.png" class="Menu-icono" alt="">
                    </label>
                    <nav class="navbar">
                    <ul>
                            <li><a href="../empleados.php">Empleados siyeca</a></li>
                            <li><a href="altaservi.php">Alta empleados servicios</a></li>
                            <li><a href="modservi.php">Modificasiones servicios</a></li>
                            <li><a href="../index.php" onclick='return confirmacion()'>Salir</a></li>
                        </ul>
                    </nav>
                </div>   
                </header>
                <div class="contentcontainer">
                
                </div>
<center><main class="table" id="customers_table">
        <section class="table__header">
        <h2>Sistema de atención siyeca, Servicio público</h2>
            <div class="input-group" >
            <div class="container-fluid">
  <form class="d-flex"><!--Formulario para la busqueda a tiempo real-->
      <input class="input light-table-filter" data-table="table_id" type="search" 
      placeholder="Buscar un registro">
      <hr>
      </form>
  </div>
            </div>
        </section>
        <section class="table__body">
                <table class="table table-striped table-dark table_id ">
                <thead>  <tr>
                    <th>hora_entrada</th>
                        <th>hora_salida</th>
                        <th>sueldo_quincenal</th>
                        <th>fecha_pago</th>
                        <th>forma_pago</th>
                        <th>tipo_banco</th>
                        <th>dias_laborales</th>
                        <th>fecha_ingreso</th>
                        <th>Actividades</th>
                        <th>identificador_nomina</th>
                        <th>no_empleado</th>
                    </tr></thead>
                    <?php
                    /*conección con la base de datos siyeca*/
       $conexion=mysqli_connect("localhost","root","","siyeca12");
       /*funcion a realisar, mostrar los registros de la base de datos*/
       $alumnos= "SELECT * from servicios_publicos"
?>
         <?php
        $resultado=mysqli_query($conexion,$alumnos);
        while ($row=mysqli_fetch_assoc($resultado))
        {
            ?>
            <tr>
        <!--registros-->
        <td> <?php echo $row["hora_entrada"];?> </td>
                <td> <?php echo $row["hora_salida"];?> </td>
                <td> <?php echo $row["sueldo_quincenal"];?> </td>
                <td> <?php echo $row["fecha_pago"];?> </td>
                <td> <?php echo $row["forma_pago"];?> </td>
                <td> <?php echo $row["tipo_banco"];?> </td>
                <td> <?php echo $row["dias_laborales"];?> </td>
                <td> <?php echo $row["fecha_ingreso"];?> </td>
                <td> <?php echo $row["Actividades"];?> </td>
                <td> <?php echo $row["identificador_nomina"];?> </td>
                <td> <?php echo $row["no_empleado"];?> </td>
            </tr>
        <?php } ?>
                </table>
                </center>
                </section>
    
    <?php
  mysqli_close($conexion);
  ?>
</body>
<script src="../js/buscador.js"></script><!--Conexion a javascript-->

</html>