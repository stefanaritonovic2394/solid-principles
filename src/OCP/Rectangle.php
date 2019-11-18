<?php

    namespace OCP;

    class Rectangle implements Shape {
        private $width;
        private $height;

        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }

        public function area() {
            return $this->width * $this->height;
        }
    }
