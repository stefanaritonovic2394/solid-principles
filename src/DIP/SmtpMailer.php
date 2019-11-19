<?php

    namespace DIP;

    class SmtpMailer implements MailerInterface
    {
        public function send(): string
        {
            return "Sending email using SMTP";
        }
    }
