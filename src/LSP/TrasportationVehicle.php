<?php

    namespace LSP;

    class TrasportationVehicle 
    {
        private $name;
        private $speed;

        public function __construct(string $name, int $speed)
        {
            $this->name = $name;
            $this->speed = $speed;
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function getSpeed(): int
        {
            return $this->speed;
        }

        public function startEngine(): string
        {
            return "";
        }
    }
