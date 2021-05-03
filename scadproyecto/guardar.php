<?php
 
  
include('conexion_bd.php');
include('usuario_aprendiz.php');
 

$v_ingreso=$_POST['usuario'];
            
                if ($v_ingreso==3){
                    $inst_autoriza=$_POST['autoriza'];
                    $nota=$_POST['nota'];
                    $permi_tipo=$_POST['tipo_p'];
                    /*----------------------------------------------hora-----------------------------------------*/ 

                    date_default_timezone_set('America/Mexico_City');
                    $fecha_actual=date("Y-m-d H:i:s");
                                          
                    /*------------------------------------------hora---------------------------------------------*/
                    
                   
                    $resultad=consulta($miconexion,"select * from correo_usuario where nombre_correo='{$_SESSION['nusuario']}' and contraseña='{$_SESSION['nclave']}'");
                    $fil = $resultad->fetch_object(); 
                    $id=$fil->id_correo;
                    $resultado1=consulta($miconexion,"SELECT * FROM datos_basicos WHERE mail_db LIKE '%$id%'");
                $fila1 = $resultado1->fetch_object();
                $id_dat=$fila1->id_db;

                    $resultado=consulta($miconexion,"insert into  $tabla5($autor_per,$motivo_perm,$id_da_ba,id_tipoper,fecha)
                     values('$inst_autoriza','$nota','$id_dat','$permi_tipo','$fecha_actual')");
                     
                     if($resultado)
                    {                     
                        echo '<script language="javascript">alert("para confirmar presione aceptar");window.location.href="usuario_aprendiz.php"</script>';

                    }
                    else {
                        echo '<script> alert("Error") </script>';
                 
                    }
                }
                ?>