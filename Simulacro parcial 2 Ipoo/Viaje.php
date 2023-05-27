<?php

class Viaje{ 
    private $destino;
    private $horaPartida;
    private $horaLlegada;
    private $numero;
    private $montoBase;
    private $fecha;
    private $asientosTotales;
    private $asientosDisponibles;
    private $responsable;

    public function __construct($destino, $horaPartida, $horaLlegada, $numero, $montoBase, $fecha, $asientosTotales, $asientosDisponibles, $responsable) {
        $this->destino = $destino;
        $this->horaPartida = $horaPartida;
        $this->horaLlegada = $horaLlegada;
        $this->numero = $numero;
        $this->montoBase = $montoBase;
        $this->fecha = $fecha;
        $this->asientosTotales = $asientosTotales;
        $this->asientosDisponibles = $asientosDisponibles;
        $this->responsable = $responsable;
    }

    public function getDestino() {
        return $this->destino;
    }

    public function getHoraPartida() {
        return $this->horaPartida;
    }

    public function getHoraLlegada() {
        return $this->horaLlegada;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getMontoBase() {
        return $this->montoBase;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getAsientosTotales() {
        return $this->asientosTotales;
    }

    public function getAsientosDisponibles() {
        return $this->asientosDisponibles;
    }

    public function getResponsable() {
        return $this->responsable;
    }

    public function __toString() {
        return "Destino: " . $this->destino . "\n" .
               "Hora de partida: " . $this->horaPartida . "\n" .
               "Hora de llegada: " . $this->horaLlegada . "\n" .
               "Número: " . $this->numero . "\n" .
               "Monto base: " . $this->montoBase . "\n" .
               "Fecha: " . $this->fecha . "\n" .
               "Asientos totales: " . $this->asientosTotales . "\n" .
               "Asientos disponibles: " . $this->asientosDisponibles . "\n" .
               "Responsable: " . $this->responsable . "\n";
    }

    public function calcularImporteViaje() {
        $asientosVendidos = $this->asientosTotales - $this->asientosDisponibles;
        $importe = $this->montoBase + ($this->montoBase * $asientosVendidos / $this->asientosTotales);
        return $importe;
    }
}
?>