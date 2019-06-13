<?php

include_once("app/db.php");

class LoginModel
{
    private $connection;

    public function __construct()
    {
        $this->connection = db::getConnection();
    }

    public function getLogin()
    {
        if (isset($_POST['login'])) {
            if (empty($_POST['username']) && empty($_POST['password']))
                return 'numele si prenumele trebuie sa fie completate';
            if (empty($_POST['username']))
                return 'numele trebuie sa fie completat';
            if (empty($_POST['password']))
                return 'parola trebuie sa fie completata';


            $username = mysqli_real_escape_string($this->connection, $_POST['username']);
            $password = mysqli_real_escape_string($this->connection, $_POST['password']);

            $result = mysqli_query($this->connection, "select * from utilizatori where user = '" . $username . "' and parola = '" . $password . "'");

            if (mysqli_num_rows($result) > 0) {
                return 'login';
            } else
                return 'invalid user';
        }
    }

    public function generateAnonim()
    {
        $result = mysqli_query($this->connection, "select count(*) as total from anonimi");

        $total = mysqli_fetch_assoc($result);

        $user = 'Anonim' . $total['total'];

        $sql = "INSERT into anonimi (user) values ('$user')";

        $this->connection->query($sql);

        return $user;
    }
}
