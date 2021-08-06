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

  // insercion a la tabla op_tramite

  // insercion a la tabla op_ciudadano_empresa

  // insercion a la tabla oficio_e1

  
        
  
?>
<!DOCTYPE html>
<html>
    <head>
	<title>Navbar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../../css/all.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/boton.css">
	<script type="text/javascript" src="../../js/jquery.min.js" language="javascript"></script>
	<script type="text/javascript" src="../../js/navbar.js" language="javascript"></script>
</head>
<body>
	<nav>
        <ul class="text-light text-white">
		 <ul class="menu" >
		    <li class="logo"><a class="btnNav" href="../../index.html">tabasco<b>.</b>gob.mx</a></li>
		    <li class="item"><a class="btnNav"  href="#">Transparencia</a></li>
		    <li class="item"><a class="btnNav" href="#">Gobierno</a></li>
		    <li class="item"><a class="btnNav" href="#">Noticias</a></li>
		    <li class="item"><a class="btnNav" href="#">Tramites</a></li>

		  
		    <li class="item button"><a href="#">Barra de busqueda</a></li>
		    <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
		 </ul>
        </ul>
        
	</nav>
  <br>
    <br>
  <br>
 
  
  <div class="padre">

<H1 style=text-align: center; >¿TUS DATOS SON CORRECTOS?</H1>
    </div>
    <table>

  <tr>

    <th>Fecha</th>

    <td><?php echo "<p>$Fecha </p>";?></td>


  </tr>
  <tr>

    <th>Hora</th>

    <td><script type="text/javascript" name="hora">
var d = new Date();
document.write('Hora: '+d.getHours(),':'+d.getMinutes(),':'+d.getSeconds());
</script></td>


  </tr>
  <tr>

    <th>TIPO TRAMITES</th>

    <td><?php echo "<p>$tramites </p>"; ?></td>

    
  </tr>

  <tr>

    <th>NOMBRE</th>

    <td><?php echo "<p>$NombreSol </p>"; ?></td>

    
  </tr>

  <tr>

    <th>APELLIDO PATERNO</th>

    <td><?php echo "<p>$apellidoP </p>"; ?></td>


  </tr>

  <tr>

    <th>APELLIDO MATERNO</th>

    <td><?php echo "<p>$ApellidoM </p>"; ?></td>


  </tr>
  <tr>

    <th>RFC</th>

    <td><?php  echo "<p>$RFC </p>"; ?></td>


  </tr>
<tr>

    <th>CORREO</th>

    <td><?php  echo "<p>$correo</p>"; ?></td>


  </tr>

<tr>

    <th>Telefono</th>

    <td><?php echo "<p>$Celular</p>"; ?></td>


  </tr>
  <tr>

    <th>Nombre de la empresa</th>

    <td><?php echo "<p>$NombreEmpr</p>";?></td>


  </tr>
  <tr>

    <th>Dirección fiscal</th>

    <td><?php echo "<p>$DireccionFs </p>"; ?></td>


  </tr>
  <tr>

    <th>Dirección comercial</th>

    <td><?php echo "<p>$DirecciCom </p>"; ?></td>


  </tr>
  <tr>

    <th>Calle</th>

    <td><?php echo "<p>$calles</p>"; ?></td>


  </tr>
  <tr>

    <th>Colonia</th>

    <td><?php echo "<p>$colonia </p>";?></td>


  </tr>
<tr>

    <th>Numero del local</th>

    <td><?php echo "<p>$numlo </p>"; ?></td>


  </tr>
  <tr>

    <th>Sector</th>

    <td><?php  echo "<p>$sec </p>";?></td>


  </tr>
  
   <tr>

    <th>Entre que calles</th>

    <td><?php echo "<p>$entreCall </p>";?></td>


  </tr>
   <tr>

    <th>Giro de la empresa</th>

    <td><?php  echo "<p>$giroEm </p>"; ?></td>


  </tr>
   <tr>

    <th>Oficina con Noº de extensión</th>

    <td><?php echo "<p>$OficinaCon </p>"; ?></td>


  </tr>


</table> 
 <br>
 <br>

<div class="padre">

<i>
  <div class="form-group">
    <a type="button" class="btn btn-primary" style="background-color:#9D2449" href="dictaminar_autorizar_planes.html">CORREGIR</a>
    <a type="button" class="btn btn-primary"style="background-color:#9D2449" href="../../Tramites/pago.html">CONTINUAR</a>
    </div>

    </i>


    </div>   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>