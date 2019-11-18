<?php

    namespace DIP;

    use DIP\MailerInterface;

    class MessageSender
    {
        private $mailer;

        public function __construct(MailerInterface $mailer)
        {
            $this->mailer = $mailer;
        }
    }
