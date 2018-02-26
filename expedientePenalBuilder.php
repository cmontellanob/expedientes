<?php
include("expedienteBuilder.php");

class expedienteCivilBuilder extends expedienteBuilder {
    public function  buildPartes()
    {
    	//No se inicializa conninguna parte por defecto
    }

    public function buildMateria()
    {
    	$this->expediente->setMateria('Civil');
    }
    public function buildTipoProceso()
    {
		$this->expediente->setTipoProceso('Ejecutivo');
    }
    public function buildActuados()
    {
       $this->expediente->addActuado('Presentacion de la Demanda');

    }
}
?>