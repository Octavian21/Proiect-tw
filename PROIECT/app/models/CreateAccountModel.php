<?php

include_once("app/db.php");

class CreateAccountModel
{
    private $connection;

    public function __construct()
    {
        $this->connection = db::getConnection();
    }

    public function getCreateAccountErrors()
    {
        if ($_POST['email'] == '')
            return 'Niciun email nu a fost introdus';

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
            return "Emailul nu este valid";
        }

        if ($_POST['tara'] == '')
            return 'Nicio tara nu a fost introdusa';

        if ($this->getUser() == 1)
            return "Numele exista deja";

        if (strlen($_POST['username']) < 4)
            return "Numele trebuie sa aiba minim 4 caractere";

        if (strlen($_POST['username']) > 15)
            return "Numele nu poate sa aiba mai mult de 15 caractere";

        if (strlen($_POST['password']) < 6 or preg_match('/[0-9]/', $_POST['password']) == false)
            return 'Parola trebuie sa aiba minim 6 caractere si sa contina cel putin o cifra';

        if (strlen($_POST['password']) > 20)
            return "Parola nu poate sa aiba mai mult de 20 de caractere";

        if ($_POST['password'] !== $_POST['newpassword'])
            return "Parolele nu corespund";

        if ($this->insertUser() == 1)
            return 'Contul a fost creat cu succes';
    }

    public function getUser()
    {
        $username = mysqli_real_escape_string($this->connection, $_POST['username']);

        $result = mysqli_query($this->connection, "select * from utilizatori where user = '" . $username . "'");

        if (mysqli_num_rows($result) > 0) {
            return 1;
        } else
            return 0;
    }

    public function insertUser()
    {
        $username = mysqli_real_escape_string($this->connection, $_POST['username']);

        $password = mysqli_real_escape_string($this->connection, $_POST['password']);

        $tara = mysqli_real_escape_string($this->connection, $_POST['tara']);

        $email = mysqli_real_escape_string($this->connection, $_POST['email']);

        $sql = "INSERT into utilizatori (user,parola,tara,email) values ('" . $username . "','" . $password . "','" . $tara . "','" . $email . "')";

        if ($this->connection->query($sql) === TRUE)
            return 1;
        return 0;
    }
}
