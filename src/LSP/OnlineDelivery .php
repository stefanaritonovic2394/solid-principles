<?php

    namespace LSP;

    class OnlineDelivery extends BookDelivery
    {
        public function getSoftwareOptions(): array
        {
            $audioFormat = ['mp3'];
            return $audioFormat;
        }
    }
