<?php

    namespace DIP;

    class SmtpMailer implements MailerInterface
    {
        public function send()
        {
            return "Sending email using SMTP";
        }
    }
