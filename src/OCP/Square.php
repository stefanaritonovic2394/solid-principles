<?php

    namespace OCP;

    class Square implements Shape {
        private $length;

        public function __construct(int $length) {
            $this->length = $length;
        }

        public function area(): int {
            return pow($this->length, 2);
        }
    }
