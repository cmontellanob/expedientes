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
        $this->atuado[]= $actuado; 
 
    }
    public function toString() {
        echo "expediente<br/>";
        echo "partes<br/>";
        foreach ($this->partes as $parte)
            echo $parte."<br/>";
                echo "partes<br/>";
        foreach ($this->actuados as $actuado)
            echo $actuado."<br/>";;
    }
}
?>