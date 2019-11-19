<?php

    namespace LSP;

    class Bicycle extends VehiclesWithoutEngine
    {
        public function startMoving(): string
        {
            return $this->getName() . " started moving " . $this->getSpeed() . " km/h";
        }
    }
