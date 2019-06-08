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

            $result = mysqli_query($this->connection, "select * from utilizatori where user = '" . $_POST['username'] . "' and parola = '" . $_POST['password'] . "'");

            if (mysqli_num_rows($result) > 0) {
                return 'login';
            } else
                return 'invalid user';
        }
    }

    public function getNume()
    {
        return $_POST['username'];
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
