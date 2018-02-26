<?php
public class expedienteCivilBuilder extends expediente {
    public function  buildPartes()
    {
    	$this->expediente->addParte('Ministerio Publico');
    }

    public function buildMateria()
    {
    	$this->expediente->setMateria('Penal');
    }
    public function buildTipoProceso()
    {
		$this->expediente->setTipoProceso('Delito Publico');
    }
    public function buildActuados()
    {
       $this->expediente->addActuado('Inicio de la Investigacion');

    }
}
?>