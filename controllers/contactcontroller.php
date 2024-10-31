<?php

require_once __DIR__ . '/../Models/ContactModel.php';
require_once __DIR__ . '/../dbconnect.php';


class ContactController
{
    private $DataBase;

    public function __construct($DataBase)
    {
        $this->DataBase = $DataBase;
    }

    public function SubmitForm()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $contactModel = new ContactModel($this->DataBase);
            if ($contactModel->ContactFormSubmit($name, $email, $message)) {
                echo "Message has been sent!";
            } else {
                echo "Error: Could not save the message.";
            }
        }
    }
}