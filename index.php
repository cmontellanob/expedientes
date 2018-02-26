<?php
use plataforma;
use expedienteCivilBuilder;
use expedientePenalBuilder;

$plataforma = new Plataforma(); // Director.
$expedientecivilbuilder = new expedienteCivilBuilder();
$expedientepenalbuilder = new expedientePenalBuilder();
 
$plataforma->setExpedienteBuilder( $expedientecivilbuilder );
$plataforma->crearNuevoExpediente();
$civil = $plataforma->getExpediente();

$plataforma->setExpedienteBuilder( $expedientepenalbuilder );
$plataforma->crearNuevoExpediente();
$penal = $plataforma->getExpediente();


?>
