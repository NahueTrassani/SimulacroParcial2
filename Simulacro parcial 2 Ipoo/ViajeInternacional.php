<?php
class ViajeInternacional extends Viaje{
    private $docAdicional;
    private $impuestos;

    public function __construct($fecha, $horaLlegada, $horaPartida, $montoBase, $chofer, $docAdicional, $impuestos) {
        parent::__construct($fecha, $horaLlegada, $horaPartida, $montoBase, $chofer);
        $this->docAdicional = $docAdicional;
        $this->impuestos = $impuestos;
    }

     // Métodos get de la clase extendida
     public function getDocAdicional(){
        return $this->docAdicional;
    }

    public function getImpuestos(){
        return $this->impuestos;
    }

    // Métodos set de la clase extendida
    public function setDocAdicional($docAdicional){
        $this->docAdicional = $docAdicional;
    }

    public function setImpuestos($impuestos){
        $this->impuestos = $impuestos;
    }
}

?>
