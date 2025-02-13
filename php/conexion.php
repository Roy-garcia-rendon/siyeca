
<?php

class mysqlconex{ /*clase*/
    public function conex(){ /*Funcion publica*/
  /*variable mysqli funcion*/   $conexion=mysqli_connect("localhost","root","","siyeca12"); /*parametros*/
    return $conexion; /*return*/
 }
}
/*conección con la base de datos de empleados siyeca*/
?>