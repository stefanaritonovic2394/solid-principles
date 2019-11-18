<?php

    namespace LSP;

    class HardcoverDelivery extends OfflineDelivery
    {
        public function getDeliveryLocations()
        {
            return "Hardcover book locations";
        }
    }
