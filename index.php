<?php
include("Plataforma.php");
include("expedienteCivilBuilder.php");
include("expedientePenalBuilder.php");

$plataforma = new Plataforma(); // Director.
$expedientecivilbuilder = new expedienteCivilBuilder();
$expedientepenalbuilder = new expedientePenalBuilder();
 
$plataforma->setExpedienteBuilder( $expedientecivilbuilder );
$plataforma->crearNuevoExpediente();
$civil = $plataforma->getExpediente();
$civil->toString();

$plataforma->setExpedienteBuilder( $expedientepenalbuilder );
$plataforma->crearNuevoExpediente();
$penal = $plataforma->getExpediente();
$penal->toString();

?>
