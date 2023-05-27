<?php
class Viaje{
    private $fecha;
    private $horaLlegada;
    private $horaPartida;
    private $montoBase;
    private $chofer;

    public function __construct($fecha, $horaLlegada, $horaPartida, $montoBase, $chofer) {
        $this->fecha = $fecha;
        $this->horaLlegada = $horaLlegada;
        $this->horaPartida = $horaPartida;
        $this->montoBase = $montoBase;
        $this->chofer = $chofer;
    }

      // Métodos get
    public function getFecha(){
        return $this->fecha;
    }

    public function getHoraLlegada(){
        return $this->horaLlegada;
    }

    public function getHoraPartida(){
        return $this->horaPartida;
    }

    public function getMontoBase(){
        return $this->montoBase;
    }

    public function getChofer(){
        return $this->chofer;
    }

    // Métodos set
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function setHoraLlegada($horaLlegada){
        $this->horaLlegada = $horaLlegada;
    }

    public function setHoraPartida($horaPartida){
        $this->horaPartida = $horaPartida;
    }

    public function setMontoBase($montoBase){
        $this->montoBase = $montoBase;
    }

    public function setChofer($chofer){
        $this->chofer = $chofer;
    }

}

?>