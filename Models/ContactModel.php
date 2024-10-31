<?php

class ContactModel
{
    private $DataBase;

    public function __construct($DataBase)
    {
        $this->DataBase = $DataBase;
    }

    public function ContactFormSubmit($name, $email, $message)
    {
        $query = $this->DataBase->prepare("INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)");
        $query->bindParam(':name', $name);
        $query->bindParam(':email', $email);
        $query->bindParam(':message', $message);


        if ($query->execute()) {
            return true;
        } else {
            $error = $query->errorInfo();
            echo "Database Error: " . $error[2];
            return false;
        }
    }
}