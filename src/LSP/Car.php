<?php

    namespace LSP;

    class Car extends VehiclesWithEngine
    {
        public function startEngine(): string
        {
            return $this->getName() . " engine started...";
        }
    }
