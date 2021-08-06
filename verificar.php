<?php
  include('conexion.php');// llamado del archivo conexion.php como una libreria
  //llamamos a la funcion y la asignamos a la variable conexion
  $conexion = Conexion();
  // verificiamso si hay una conexion
  if ($conexion) {
    echo "conectado";
  }else{
    echo "no conectado";
  }

  //valores del usuario
  $tramites = $_POST['tramites'];
  $Fecha = $_POST['Fecha'];
  $Asunto = $_POST['Asunto'];
  $NombreSol = $_POST['NombreSol'];
  $apellidoP = $_POST['apellidoP'];
  $ApellidoM = $_POST['ApellidoM'];
  $RFC = $_POST['RFC'];
  $Celular = $_POST['Celular'];
  $correo = $_POST['correo'];

  // valores de la empresa
  $NombreEmpr = $_POST['NombreEmpr'];
  $DireccionFs = $_POST['DireccionFs'];
  $DirecciCom = $_POST['DirecciCom'];
  $calles = $_POST['calles'];
  $colonia = $_POST['colonia'];
  $numlo = $_POST['numlo'];
  $sec = $_POST['sec'];
  $entreCall = $_POST['entreCall'];
  $giroEm = $_POST['giroEm'];
  $OficinaCon = $_POST['OficinaCon'];
    
  // insercion a la tabla persona_e1
  $persona = pg_query($conexion, "INSERT INTO persona_e1 (id_persona, nombre, apellidop, apellidom, telefono, tipo, razon_social, denominacion_fiscal, correo, rfc) 
  values(DEFAULT,'$NombreSol','$apellidoP','$ApellidoM','$Celular','1', '1', '1','$correo','$RFC')");
  // condiciona si existe la consulta en la variable $persona si se logro realizar la insercion
  if($persona){ // si se logro la insercion
    echo "<br> Los datos se insertaron en la tabla persona_e1";
  }else{// si no se logro la insercion
    echo "<br> Los datos no se insertaron en la tabla persona_e1";
  }// fin del condicional a la tabla persona_e1

  // insercion a la tabla empresa
  $empresa = pg_query($conexion, "INSERT INTO empresa(nombre, direccion_fisica , direccion_comercial , calle,colonia,numero_local,sector,entre_calles,giro_empresa,oficina_ext)
  values ('$NombreEmpr','$DireccionFs', '$DirecciCom','$calles','$colonia','$numlo','$sec','$entreCall','$giroEm', '$OficinaCon')");
  // condiciona si existe la consulta la variable $empresa si se logro realizar la insercion
  if($empresa){// si se logro la insercion
    echo "<br> Los datos se insertaron en la tabla empresa";
  }else{// si no se logro la insercion
    echo "<br> Los datos no se insertaron en la tabla empresa";
  }// fin del condicional a la tabla empresa
  
  // insercion a la tabla oficio_e1
  // firma, comprobante, ine, rfc
  
  // insercion a la tabla op_ciudadano_empresa
  
  // insercion a la tabla op_tramite

        
  
?>
