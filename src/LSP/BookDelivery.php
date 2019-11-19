<?php

    namespace LSP;

    class BookDelivery 
    {
        private $title;
        private $userId;

        public function __construct(string $title, int $userId)
        {
            $this->title = $title;
            $this->userId = $userId;
        }

        public function getTitle(): string
        {
            return $this->title;
        }

        public function getUserId(): int
        {
            return $this->userId;
        }
    }
