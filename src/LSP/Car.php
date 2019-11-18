<?php

    namespace LSP;

    class Car extends VehiclesWithEngine
    {
        public function startEngine()
        {
            return $this->getName() . " engine started...";
        }
    }
