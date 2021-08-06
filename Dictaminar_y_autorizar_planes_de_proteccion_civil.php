<!DOCTYPE html>
<html>
  <head>
    <title>Navbar</title>
    <meta charset="utf-8" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="../../css/navbar.css" />
    <link rel="stylesheet" type="text/css" href="../../css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/boton.css" />
    <style>
      UL.nav LI A.selected,
      UL.nav LI A:hover {
        color: #9d2449;
        padding-top: 7px;
      }
      .nav-tabs .nav-link.active {
        background-color: #9d2449;
        color: rgb(255, 255, 255);
      }
    </style>

    <script
      type="text/javascript"
      src="../../js/jquery.min.js"
      language="javascript"
    ></script>
    <script
      type="text/javascript"
      src="../../js/navbar.js"
      language="javascript"
    ></script>
  </head>
  <body>
    <nav>
      <ul class="text-light text-white">
        <ul class="menu">
          <li class="logo">
            <a class="btnNav" href="../../index.html">tabasco<b>.</b>gob.mx</a>
          </li>
          <li class="item"><a class="btnNav" href="#">Transparencia</a></li>
          <li class="item"><a class="btnNav" href="#">Gobierno</a></li>
          <li class="item"><a class="btnNav" href="#">Noticias</a></li>
          <li class="item"><a class="btnNav" href="#">Tramites</a></li>

          <li class="item button"><a href="#">Barra de busqueda</a></li>
          <li class="toggle">
            <a href="#"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
      </ul>
    </nav>
    <br />
    <div class="form-group">
      <a type="button" class="btn btn-primary" href="../../index.php"
        >Regresar</a
      >
    </div>

    <main class="mt-4 mb-4">
      <div class="container">
        <h1 class="text-center">
          Dictaminar y Autorizar Planes de Protección Civil
        </h1>
        <hr />
        <div class="row">
          <div class="col">
            <form action="verificar.php" method="post" enctype="multipart/form-data">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    id="denuncia-tab"
                    data-toggle="tab"
                    href="#denuncia"
                    role="tab"
                    aria-controls="denuncia"
                    aria-selected="true "
                    >DATOS NECESARIOS</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="denunciante-tab"
                    data-toggle="tab"
                    href="#denunciante"
                    role="tab"
                    aria-controls="denunciante"
                    aria-selected="false"
                    >RECEPCION DE ARCHIVOS</a
                  >
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div
                  class="tab-pane fade show active"
                  id="denuncia"
                  role="tabpanel"
                  aria-labelledby="denuncia-tab"
                >
                  <div class="container mt-3 md-6">
                    <div class="form-group">
                      <select
                        name="tramites"
                        class="browser-default custom-select"
                      >
                        <?php
                            // poner el valor a los options
                          include('conexion.php');
                          $con = Conexion();
                          $modalidad = pg_query($con,"select id_modalidad, nombre from modalida_tramite_e1 where id_modalidad in (select id_modalidad from op_tramite_dep_modalidad_e1 where id_tramite = 3)");
                          while ($row = pg_fetch_row($modalidad)){
                            echo "<option value='$row[0]'>".$row[1]."</option>";
                          }
                        ?>
                      </select>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-lg-6 col-md-6">
                        <label for="">Fecha de solicitud</label>
                        <input
                          type="date"
                          name="Fecha"
                          id=""
                          class="form-control"
                          aria-describedby="helpId"
                        />
                      </div>

                      <div class="form-group col-lg-6 col-md-6">
                        <label for="">Asunto</label>
                        <input
                          type="text"
                          name="Asunto"
                          id=""
                          class="form-control"
                          placeholder="Revisión de plan de contingencia (PLC)"
                          aria-describedby="helpId"
                        />
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-lg-12">
                        <label for="">Nombre del solicitante</label>
                        <input
                          type="text"
                          name="NombreSol"
                          id=""
                          class="form-control"
                          placeholder="Nombre"
                          aria-describedby="helpId"
                        />
                      </div>
                      <div class="form-group col-lg-6 col-md-6">
                        <label for="">Apellido Paterno</label>
                        <input
                          type="text"
                          name="apellidoP"
                          id=""
                          class="form-control"
                          placeholder="Paterno"
                          aria-describedby="helpId"
                        />
                      </div>
                      <div class="form-group col-lg-6 col-md-6">
                        <label for="">Apellido Materno</label>
                        <input
                          type="text"
                          name="ApellidoM"
                          id=""
                          class="form-control"
                          placeholder="Materno"
                          aria-describedby="helpId"
                        />
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-lg-4 col-md-4">
                        <label for="">RFC</label>
                        <input
                          type="text"
                          name="RFC"
                          id=""
                          class="form-control"
                          placeholder="RFC"
                          aria-describedby="helpId"
                        />
                      </div>

                      <div class="form-group col-lg-4 col-md-4">
                        <label for="">Celular</label>
                        <input
                          type="text"
                          name="Celular"
                          id=""
                          class="form-control"
                          placeholder="9999999999"
                          aria-describedby="helpId"
                        />
                      </div>

                      <div class="form-group col-lg-4 col-md-4">
                        <label for="">Correo</label>
                        <input
                          type="text"
                          name="correo"
                          id=""
                          class="form-control"
                          placeholder="ejemplo@ejemplo.com"
                          aria-describedby="helpId"
                        />
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-lg-12 col-md-12">
                        <label for="">Nombre de la empresa</label>
                        <input
                          type="text"
                          name="NombreEmpr"
                          id=""
                          class="form-control"
                          placeholder="Nombre"
                          aria-describedby="helpId"
                        />
                      </div>
                      <div class="form-group col-lg-6 col-md-6">
                        <label for="">Dirección fiscal</label>
                        <input
                          type="text"
                          name="DireccionFs"
                          id=""
                          class="form-control"
                          placeholder="Dirección fiscal"
                          aria-describedby="helpId"
                        />
                      </div>

                      <div class="form-group col-lg-6 col-md-6">
                        <label for="">Dirección comercial</label>
                        <input
                          type="text"
                          name="DirecciCom"
                          id=""
                          class="form-control"
                          placeholder="Dirección comercial"
                          aria-describedby="helpId"
                        />
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-lg-3 col-md-6">
                        <label for="">Calle</label>
                        <input
                          type="text"
                          name="calles"
                          id=""
                          class="form-control"
                          placeholder="Calle"
                          aria-describedby="helpId"
                        />
                      </div>

                      <div class="form-group col-lg-3 col-md-6">
                        <label for="">Colonia</label>
                        <input
                          type="text"
                          name="colonia"
                          id=""
                          class="form-control"
                          placeholder="colonia"
                          aria-describedby="helpId"
                        />
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label for="">Numero del local</label>
                        <input
                          type="text"
                          name="numlo"
                          id=""
                          class="form-control"
                          placeholder="interno o externo"
                          aria-describedby="helpId"
                        />
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-lg-3 col-md-6">
                        <label for="">Sector</label>
                        <input
                          type="text"
                          name="sec"
                          id=""
                          class="form-control"
                          placeholder="Sector"
                          aria-describedby="helpId"
                        />
                      </div>

                      <div class="form-group col-lg-3 col-md-6">
                        <label for="">Entre que calles</label>
                        <input
                          type="text"
                          name="entreCall"
                          id=""
                          class="form-control"
                          placeholder="Entre que calles"
                          aria-describedby="helpId"
                        />
                      </div>

                      <div class="form-group col-lg-6">
                        <label for="">Giro de la empresa</label>
                        <input
                          type="text"
                          name="giroEm"
                          id=""
                          class="form-control"
                          placeholder="Giro de la empresa, establecimiento y/o negocio"
                          aria-describedby="helpId"
                        />
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="">Oficina con Noº de extensión</label>
                      <input
                        type="text"
                        name="OficinaCon"
                        id=""
                        class="form-control"
                        placeholder="Oficina con Noº de extensión"
                        aria-describedby="helpId"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="denunciante"
                  role="tabpanel"
                  aria-labelledby="denunciante-tab"
                >
                  <div class="container mt-3" id="contenedor1">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="">Archivo Firmado</label>
                        <div class="form-group">
                          <label for="">Cargar archivo</label>
                          <input type="file" name="firma" id="firma" accept=".pdf"/>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="ejemplo_archivo_1"
                          >Comprobante de domicilio del estado de tabasco</label
                        >
                        <br />
                        <input type="file" id="ejemplo_archivo_1" name="comprobante" accept=".pdf"/>
                        <p class="help-block">No mayor a 3 meses</p>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="ejemplo_archivo_1">INE/IFE</label>
                        <br />
                        <input type="file" id="ejemplo_archivo_1" name="ine"/>
                        <p class="help-block">Comprobante de amabas caras</p>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="ejemplo_archivo_1"
                          >Comprobante de RFC</label
                        >
                        <br />
                        <input type="file" id="ejemplo_archivo_1" name="rfc" accpet=".pdf"/>
                        <p class="help-block">Documento que valide el RFC</p>
                      </div>
                    </div>

                    <div class="d-flex justify-content-end">
                      <input
                        type="submit"
                        name="acc"
                        value="continuar"
                        class="btn btn-primary btn-block"
                        style="background-color: #9d2449"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>

    <!-- Etiquetas script -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script src="js/main.js"></script>
  </body>
</html>
