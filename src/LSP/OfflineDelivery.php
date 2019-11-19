<?php

    namespace LSP;

    class OfflineDelivery extends BookDelivery
    {
        public function getDeliveryLocations(): string
        {
            return "Delivery locations";
        }
    }
