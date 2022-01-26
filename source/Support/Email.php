<?php

namespace Source\Support;

use PHPMailer\PHPMailer\PHPMailer;
use Excception;
use stdClass;
class Email{

    private $email;
    private $data;
    private $error;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->data = new stdClass();

        //$this->mail->isSMTP();
        $this->mail->setLanguage("br");

        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = "tls";
        $this->mail->CharSet = "utf-8";
        $this->mail->IsHTML(true);   

        $this->mail->Host = MAIL["host"];
        $this->mail->Port = MAIL["port"];
        $this->mail->Username = MAIL["user"];
        $this->mail->Password = MAIL["passwd"];

    }

    public function add($subject, $body, $recipient_name, $recipient_email): Email
    {
        $this->data->subject = $subject;
        $this->data->body = $body;
        $this->data->recipient_name = $recipient_name;
        $this->data->recipient_email = $recipient_email;

        return $this;
    }

    public function send($from_name = MAIL["from_name"], $from_email = MAIL["from_email"])
    {
        try {
            $this->mail->Subject  = $this->data->subject;
            $this->mail->msgHTML($this->data->body);
            $this->mail->addAddress($this->data->recipient_email,$this->data->recipient_name);
            $this->mail->setFrom($from_email,$from_name);
            $this->mail->send();
            return true;
        } catch (Exception $ex) {
            $this->error = $ex;
            return false;
        }
    }
    public function error()
    {
        return $this->error;
    }
}