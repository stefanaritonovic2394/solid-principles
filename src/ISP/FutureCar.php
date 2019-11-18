<?php

    namespace ISP;

    class FutureCar implements CarInterface, AirplaneInterface
    {
        public function drive()
        {
            return "Driving a future car";
        }

        public function fly()
        {
            return "Flying a future car";
        }
    }
