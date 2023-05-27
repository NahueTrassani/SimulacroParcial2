<?php

    class ViajeNacional extends Viaje {
        private $descuento;

        public function __construct($destino, $horaPartida, $horaLlegada, $numero, $montoBase, $fecha, $asientosTotales, $asientosDisponibles, $responsable, $descuento = 10) {
            parent::__construct($destino, $horaPartida, $horaLlegada, $numero, $montoBase, $fecha, $asientosTotales, $asientosDisponibles, $responsable);
            $this->descuento = $descuento;
        }

        public function obtenerDescuento() {
            return $this->descuento;
        }
    }

?>