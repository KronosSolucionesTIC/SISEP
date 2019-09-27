<?php

include "../controller/talento_humanoController.php";

$talentoHumanoInst = new talento_humanoController();

$arrPermisos      = $talentoHumanoInst->getPermisosModulo_Tipo(11, $_COOKIE["log_lunelAdmin_IDtipo"]);
$editaPersonal    = $arrPermisos[0]["editar"];
$eliminaPersonal  = $arrPermisos[0]["eliminar"];
$consultaPersonal = $arrPermisos[0]["consultar"];

$id_talento_humano = $_GET["id_talento_humano"];
$proyectoMGen      = $talentoHumanoInst->getFuncionarioID($id_talento_humano);
?>

<div id="page-wrapper" style="margin: 0px;">

  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header titleprincipal"><img src="../img/botones/talento_humanoonly.png"> Detalle Talento Humano - <?php echo $proyectoMGen[0]["nombre"] ?></h1>
      </div>
      <!-- /.col-lg-12 -->

      <div class="col-md-7">
        <ol class="breadcrumb migadepan">
          <li><a href="proyecto_marco.php" class="migadepan">Inicio</a></li>
          <li><a href="descripcion.php?id_proyectoM=<?php echo $proyectoMGen[0]["pkIDproyecto"]; ?>" class="migadepan">Descripción</a></li>
          <li><a href="principal.php?id_proyectoM=<?php echo $proyectoMGen[0]["pkIDproyecto"]; ?>" class="migadepan">Menú principal</a></li>
          <li><a href="talento_humano.php?id_proyectoM=<?php echo $proyectoMGen[0]["pkIDproyecto"]; ?>" class="migadepan">Talento Humano</a></li>
          <li class="active migadepan">Detalle Talento humano </li>
        </ol>
      </div>

  </div>
  <!-- /.row -->

    <div class="row">

        <?php echo $talentoHumanoInst->getTalentoHumanoTitulo($id_talento_humano); ?>

        <div class="panel panel-default">

            <?php echo $talentoHumanoInst->getTalentoHumanoDatosGen($id_talento_humano); ?>

            <?php echo $talentoHumanoInst->getArchivosTalentoHumanoId($id_talento_humano); ?>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /#page-wrapper -->