<?php

    class Persona {
        
        public  string $nombre = "Annie"; // UN ATRIBUTO PUBLICO DE TIPO CADENA
        public  int $identificacion = 1234;
        public  int $edad = 18; // ATRIBUTO DE TIPO ENTERO (tipado)

        //Es opcional tipar, pero para un sistema seguro es lo mejor
        // METODOS DE LA CLASE PERSONA (SE LE PASAN PARAMETROS QUE VENGA FUERA DE LA CLASE)
        public function Saludar () :string {

            return "Hola, bienvenido" .$this->nombre;

        }

        public function Numero_ID (string $documento){

            return $this->nombre. "tu número de identificación es:" .$this->identificacion;

        }
    }