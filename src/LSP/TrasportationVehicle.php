<?php

    namespace LSP;

    class TrasportationVehicle 
    {
        private $name;
        private $speed;

        public function __construct($name, $speed)
        {
            $this->name = $name;
            $this->speed = $speed;
        }

        public function getName() 
        {
            return $this->name;
        }

        public function getSpeed() 
        {
            return $this->speed;
        }

        public function startEngine()
        {
            return "";
        }
    }
