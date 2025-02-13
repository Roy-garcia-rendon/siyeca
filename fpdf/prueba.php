<?php
ob_start();

?>
<!DOCTYPE html>
<html>

<head>
    <title>REPORTES SIYECA</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x.ico" href="imagenes/per1.ico">
    <link rel="stylesheet" href="estilo.css" type="text/css">
</head>

<body>
<style>


/* ddddddddddddddddddddd*/ 

* {
  margin: 0;
  padding: 0;

  box-sizing: border-box;
  font-family: sans-serif;
}
.container {
  display: flex;
  align-items: center; /* Alinea verticalmente */
  /*gap: 589px;  Espacio entre elementos */
}
@media print {
.table, .table__body {
overflow: visible;
height: auto !important;
width: auto !important;
}
}

/*@page {
  size: landscape;
  margin: 0; 
}*/

body {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgb(231, 224, 224);
}
.table th{
  position: center;
}
.table__header .input-group {
  width: 35%;
  height: 100%;
  background-color: #fff5;
  padding: 0 .8rem;
  border-radius: 2rem;

  display: flex;
  justify-content: center;
  align-items: center;

  transition: .2s;
}

.table__header .input-group:hover {
  width: 45%;
  background-color: #fff8;
  box-shadow: 0 .1rem .4rem #0002;
}

.table__header .input-group img {
  width: 1.2rem;
  height: 1.2rem;
}

.table__header .input-group input {
  width: 100%;
  padding: 0 .5rem 0 .3rem;
  background-color: transparent;
  border: none;
  outline: none;
}

.table__body {
  width: 95%;
  max-height: calc(89% - 1.6rem);
  background-color: #fffb;

  margin: .8rem auto;
  border-radius: .6rem;

  overflow: auto;
  overflow: overlay;
}


.table__body::-webkit-scrollbar{
  width: 0.5rem;
  height: 0.5rem;
}

.table__body::-webkit-scrollbar-thumb{
  border-radius: .5rem;
  background-color: #0004;
  visibility: hidden;
}

.table__body:hover::-webkit-scrollbar-thumb{ 
  visibility: visible;
}


table {
  width: 100%;
}

td img {
  width: 36px;
  height: 36px;
  margin-right: .5rem;
  border-radius: 50%;

  vertical-align: middle;
}

table, th, td {
  border-collapse: collapse;
  padding: 1rem;
  text-align: left;
}
table, td{
  border: 2px solid rgba(0, 0, 0, 0.4) ;
  padding: 10px;
}


tbody tr:nth-child(even) {
  background-color: #0000000b;
}

tbody tr {
  --delay: .1s;
  transition: .5s ease-in-out var(--delay), background-color 0s;
}

tbody tr.hide {
  opacity: 0;
  transform: translateX(100%);
}

tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.4) !important;
}



</style>
    <header>
       

        
        <div></div>
        <nav>
            <ul>
               
            </ul>
        </nav>
    </header>
    <section class="main">
        <?php

        $conexion=mysqli_connect("localhost", "root", "", "siyeca12");
       
     $Alumnos="SELECT * FROM  empleados";
               
        ?> <div class="container">
        <img src="https://<?php echo $_SERVER['HTTP_HOST'];?>/siyeca/logo.jpg" alt="logotipo ayuntamiento" style="width: 5%; height: 5%">
         <h1>EMPLEADOS SIYECA</h1>
         </div>
        <table  class="table table-striped table-dark table_id">
            <tr>
                <td class="titulos"><b>No. Empleado</b></td>
                <td class="titulos"><b>Nombre</b></td>
                <td class="titulos"><b>Edad</b></td>
                <td class="titulos"><b>CURP</b></td>
                <td class="titulos"><b>Num tel</b></td>
                <td class="titulos"><b>Nacionalidad</b></td>
                <td class="titulos"><b>Genero</b></td>
                <td class="titulos"><b>Direccion</b></td>
               

            </tr>
            <?php $resultado = mysqli_query($conexion, $Alumnos); 
            
            
            while($row=mysqli_fetch_assoc($resultado)) {?>
            <tr>
                <td> <?php echo $row["no_empleado"];?> </td>
                <td> <?php echo $row["nombre"];?> </td>
                <td> <?php echo $row["edad"];?> </td>
                <td> <?php echo $row["curp"];?> </td>
                <td> <?php echo $row["num_tel"];?> </td>
                <td> <?php echo $row["nacionalidad"];?> </td>
                <td> <?php echo $row["genero"];?> </td>
                <td> <?php echo $row["dirreccion"];?> </td>
            </tr>
            <?php  } ?>
        </table>
        <table>
        <tr>
                <td class="titulos"><b>No. Empleado</b></td>
                <td class="titulos"><b>Profecion</b></td>
                <td class="titulos"><b>Ocupacion</b></td>
                <td class="titulos"><b>Sangre</b></td>
                <td class="titulos"><b>RFC</b></td>
                <td class="titulos"><b>Estado civil</b></td>
                <td class="titulos"><b>TEL emergencia</b></td>
                <td class="titulos"><b>Dependecia</b></td>
            </tr>
            <?php $resultado = mysqli_query($conexion, $Alumnos); 
            
            
            while($row=mysqli_fetch_assoc($resultado)) {?>
            <tr>
                <td> <?php echo $row["no_empleado"];?> </td>
                <td> <?php echo $row["profesion"];?> </td>
                <td> <?php echo $row["ocupacion"];?> </td>
                <td> <?php echo $row["tipo_de_sangre"];?> </td>
                <td> <?php echo $row["rfc"];?> </td>
                <td> <?php echo $row["estado_civil"];?> </td>
                <td> <?php echo $row["tel_emergencia"];?> </td>
                <td> <?php echo $row["dependencia"];?> </td>
            </tr>
            <?php  } ?>
        </table>
   
    </body>

</html>


<?php

$html=ob_get_clean();

// echo $html;

require_once '../administrador/libreria/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf= new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);




$dompdf->loadHtml($html);

//$dompdf->setPaper('letter');

 $dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream("siyeca_reporte.pdf", array("Attachment" => false));

?>

