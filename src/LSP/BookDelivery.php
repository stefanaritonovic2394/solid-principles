<?php

    namespace LSP;

    class BookDelivery 
    {
        private $title;
        private $userId;

        public function __construct($title, $userId)
        {
            $this->title = $title;
            $this->userId = $userId;
        }

        public function getTitle() 
        {
            return $this->title;
        }
    }
