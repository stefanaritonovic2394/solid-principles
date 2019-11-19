<?php

    namespace ISP;

    class FutureCar implements CarInterface, AirplaneInterface
    {
        public function drive(): string
        {
            return "Driving a future car";
        }

        public function fly(): string
        {
            return "Flying a future car";
        }
    }
