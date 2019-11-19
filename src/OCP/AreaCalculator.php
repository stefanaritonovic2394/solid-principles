<?php

    namespace OCP;

    class AreaCalculator {
        protected $shapes;
        
        public function __construct(array $shapes = array()) {
            $this->shapes = $shapes;
        }
        
        public function sum(): int {
            foreach($this->shapes as $shape) {
                $area[] = $shape->area();
            }

            return array_sum($area);
        }
    }
