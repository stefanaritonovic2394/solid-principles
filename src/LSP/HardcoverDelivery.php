<?php

    namespace LSP;

    class HardcoverDelivery extends OfflineDelivery
    {
        public function getDeliveryLocations(): string
        {
            return "Hardcover book locations";
        }
    }
