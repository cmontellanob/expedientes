<?php 
    class Expediente {
    private $partes = array();
    private $materia;
    private $tipoproceso;
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
        $this->atuado[]= $actuado; 
    }
}
?>