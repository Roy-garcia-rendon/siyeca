<?php
                    if (isset($_POST['agregar'])) {
                        $no_empleado = $_POST['no_empleado'];
                        $hora_entrada = $_POST['hora_entrada'];
                        $hora_salida = $_POST['hora_salida'];
                        $sueldo_quincenal = $_POST['sueldo_quincenal'];
                        $fecha_pago = $_POST['fecha_pago'];
                        $forma_pago = $_POST ['forma_pago'];
                        $tipo_banco = $_POST['tipo_banco'];
                        $dias_laborales = $_POST['dias_laborales'];
                        $fecha_ingreso = $_POST['fecha_ingreso'];


                        $conexion = mysqli_connect("localhost", "root", "", "baseyeca");
    
    
                            $verificar = "SELECT * FROM empleado WHERE no_empleado = '$no_empleado' AND dependencia = 'Obras Públicas'";
                            $resultado = mysqli_query($conexion, $verificar);

                        if (mysqli_num_rows($resultado) == 0) {
        
                               echo "<p>El empleado con el número $no_empleado no pertenece a Obras Públicas o no existe. Verifique el número de empleado o su dependencia.</p>";
                        } else {
       
                         $agregar = "INSERT INTO obras_publicas (identificador_nomina, no_empleado, hora_entrada, hora_salida, sueldo_quincenal, fecha_pago, forma_pago, tipo_banco, dias_laborales, fecha_ingreso) 
                            VALUES ('$no_empleado', '$no_empleado', '$hora_entrada', '$hora_salida', '$sueldo_quincenal', '$fecha_pago', '$forma_pago', '$tipo_banco', '$dias_laborales', '$fecha_ingreso')";

                        if (mysqli_query($conexion, $agregar)) {
                               echo "<p>Empleado agregado exitosamente a obras públicas.</p>";
                        } else {
                               echo "<p>Error al agregar el empleado a obras públicas: " . mysqli_error($conexion) . "</p>";
                  }
            }

   
             mysqli_close($conexion);
        }
            ?>