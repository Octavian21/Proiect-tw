<?php

include_once("app/db.php");

class ForgotModel
{
    private $connection;

    public function __construct()
    {
        $this->connection = db::getConnection();
    }

    public function getPasswordErrors()
    {
        if ($_POST['username'] == '')
            return 'Niciun nume nu a fost introdus';

        if ($_POST['email'] == '')
            return 'Niciun email nu a fost introdus';

        $nume = mysqli_query($this->connection, "select * from utilizatori where user = '" . $_POST['username'] . "'");

        if (mysqli_num_rows($nume) == 0)
            return 'numele nu exista';

        $email = mysqli_query($this->connection, "select * from utilizatori where email = '" . $_POST['email'] . "'");

        if (mysqli_num_rows($email) == 0)
            return 'numele nu corespunde cu emailul';

        return 'succes';
    }

    public function sendPassword()
    {
        $pass = mysqli_query($this->connection, "select parola from utilizatori where user = '" . $_POST['username'] . "'");

        $subject = "Your Recovered Password";

        $to = $_POST['email'];

        $result = mysqli_fetch_assoc($pass);

        $message = "Foloseste aceasta parola pentru logare: " . $result['parola'];

        $headers = "From : diana27andreea27@gmail.com";

        if (mail($to, $subject, $message, $headers)) {
            return "Parola a fost trimisa pe email";
        } else {
            return "Eroare la recuperarea erorii";
        }
    }
}
