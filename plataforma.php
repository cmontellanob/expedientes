<?php
public class Plataforma {
    private $expedienteBuilder;
 
    public function setExpedienteBuilder( $eb) { 
        $this->expedienteBuilder = $eb; 
    }
    
    public function getExpediente() { 
        return $expedienteBuilder->getExpediente(); 
    }
 
    public function crearNuevoExpediente() {
       $expedienteBuilder->crearNuevoExpediente();
       $expedienteBuilder->buildPartes();
       $expedienteBuilder->buildMateria();
       $expedienteBuilder->buildTipoProceso();
       $expedienteBuilder->buildActuados();
    }
}
?>