<?php

    namespace ISP;

    class Car implements CarInterface
    {
        public function drive()
        {
            return "Driving a car";
        }

        // public function fly()
        // {
        //     throw new Exception('Not implemented method');
        // }
    }
