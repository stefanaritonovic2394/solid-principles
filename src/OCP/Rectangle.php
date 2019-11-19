<?php

    namespace OCP;

    class Rectangle implements Shape {
        private $width;
        private $height;

        public function __construct(int $width, int $height) {
            $this->width = $width;
            $this->height = $height;
        }

        public function area(): int {
            return $this->width * $this->height;
        }
    }
