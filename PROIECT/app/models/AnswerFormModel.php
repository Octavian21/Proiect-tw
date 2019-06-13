<?php

include_once("app/db.php");

class AnswerFormModel
{
    private $connection;

    public function __construct()
    {
        $this->connection = db::getConnection();
    }

    public function getSize()
    {
        if (strlen($_POST['message']) > 250)
            return 'Intrebarea depaseste 250 caractere';
        if (strlen($_POST['message']) == 0)
            return 'Intrebarea nu contine niciun caracter';
        return 1;
    }

    public function getIdUser()
    {
        if ($_SESSION['login'] == 0)
            $result = mysqli_query($this->connection, "select id from anonimi where user = '" . $_SESSION['anonim-nume'] . "'");
        else
            $result = mysqli_query($this->connection, "select id from utilizatori where user = '" . $_SESSION['login-nume'] . "'");

        $id = mysqli_fetch_assoc($result);

        return $id['id'];
    }

    public function insertAnswer()
    {
        $message = mysqli_real_escape_string($this->connection, $_POST['message']);

        $sql = "INSERT into raspunsuri (id_intrebare,id_utilizator,tip_utilizator,nr_likeuri,nr_dislikeuri,data_adaugare,continut,funda) values (" . $_SESSION['question'] . ",'" . $this->getIdUser() . "','" . $_SESSION['login'] . "','" . 0 . "','" . 0 . "',NOW(),'" . $message . "','" . 0 . "')";

        if ($this->connection->query($sql) === TRUE)
            return "Raspunsul a fost adaugat cu succes!";
        return 0;
    }
}
