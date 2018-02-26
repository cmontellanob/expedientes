<?php
include ("expediente.php");
abstract class expedienteBuilder {
    protected $expediente;
 
    public function getExpediente() { 
        return $this->expediente; 
    }
    
    public function crearNuevoExpediente() { 
        $this->expediente = new Expediente(); 
    }
 
    abstract public function buildPartes();
    abstract public function buildMateria();
    abstract public function buildTipoProceso();
    abstract public function buildActuados();
       
}
?>