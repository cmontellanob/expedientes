<?php
include ("clases.php");

$plataforma = new Plataforma(); // Director.
$expedientecivilbuilder = new expedienteCivilBuilder();
$expedientepenalbuilder = new expedientePenalBuilder();
 
$plataforma->setExpedienteBuilder( $expedientecivilbuilder );
$plataforma->crearNuevoExpediente();
$civil = $plataforma->getExpediente();
$civil->toString();
echo "---------------------------------<br/>";
$plataforma->setExpedienteBuilder( $expedientepenalbuilder );
$plataforma->crearNuevoExpediente();
$penal = $plataforma->getExpediente();
$penal->toString();

?>
