<?php
use expediente;
abstract class expedienteBuilder {
    protected $expediente;
 
    public getExpediente() { 
        return $this->expediente; 
    }
    
    public crearNuevoExpediente() { 
        $this->expediente = new expediente(); 
    }
 
    abstract public function buildPartes();
    abstract public function buildMateria();
    abstract public function buildTipoProceso();
    abstract public function buildActuados();
       
}
?>