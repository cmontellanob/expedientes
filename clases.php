<?php
class Expediente {
    private $materia;
    private $tipoproceso;
    private $partes = array();
    private $actuados = array();
 
    public function addParte($parte) { 
        $this->partes[]=$parte; 
    }
    
    public function setMateria ($materia) { 
        $this->materia=$materia; 
    }
    public function setTipoProceso ($tipoproceso) { 
        $this->tipoproceso=$tipoproceso; 
    }

    public function addActuado($actuado) { 
        $this->actuados[]= $actuado; 
 
    }
    public function toString() {
        echo "expediente: ".$this->materia."<br/>";
        echo "tipo proceso: ".$this->tipoproceso."<br/>";
        
        echo "partes:<br/>";
        foreach ($this->partes as $parte)
            {echo $parte."<br/>";}
                echo "actuados:<br/>";
        foreach ($this->actuados as $actuado)
            {echo $actuado."<br/>";}
    }
}
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
class expedientePenalBuilder extends expedienteBuilder {
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
       $this->expediente->addActuado('Computo de Plazo');


    }
}
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

class Plataforma {
    private $expedienteBuilder;
     public function setExpedienteBuilder( $eb) { 
        $this->expedienteBuilder = $eb; 
    }
    
    public function getExpediente() { 
        return $this->expedienteBuilder->getExpediente(); 
    }
 
    public function crearNuevoExpediente() {
       $this->expedienteBuilder->crearNuevoExpediente();
       $this->expedienteBuilder->buildPartes();
       $this->expedienteBuilder->buildMateria();
       $this->expedienteBuilder->buildTipoProceso();
       $this->expedienteBuilder->buildActuados();
    }
}
?>