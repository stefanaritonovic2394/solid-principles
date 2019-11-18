<?php

    namespace LSP;

    class OnlineDelivery extends BookDelivery
    {
        public function getSoftwareOptions()
        {
            $audioFormat = ['mp3'];
            return $audioFormat;
        }
    }
