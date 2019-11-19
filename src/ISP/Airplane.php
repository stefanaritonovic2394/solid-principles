<?php

    namespace ISP;

    class Airplane implements AirplaneInterface
    {
        // public function drive()
        // {
        //     throw new Exception('Not implemented method');
        // }

        public function fly(): string
        {
            return "Flying an airplane";
        }
    }
