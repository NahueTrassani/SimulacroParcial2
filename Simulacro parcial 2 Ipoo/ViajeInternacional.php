<?php
class ViajeInternacional extends Viaje{
    private $docAdicional;
    private $impuestos;

    public function __construct($destino, $horaPartida, $horaLlegada, $numero, $montoBase, $fecha, $asientosTotales, $asientosDisponibles, $responsable, $docAdicional, $impuestos) {
        parent::__construct($destino, $horaPartida, $horaLlegada, $numero, $montoBase, $fecha, $asientosTotales, $asientosDisponibles, $responsable);
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
    public function obtenerMontoTotal(){
        $montoBase = $this->getMontoBase();
        //aca consulta si requiere informacion adicional.
        if ($this->getDocAdicional()) {
            $impuestos = $montoBase * ($this->getImpuestos() / 100);
            return $montoBase + $impuestos;
        } else {
            return $montoBase;
        }
    }

}

?>
