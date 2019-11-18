<?php

    namespace OCP;

    class Square implements Shape {
        private $length;

        public function __construct($length) {
            $this->length = $length;
        }

        public function area() {
            return pow($this->length, 2);
        }
    }
