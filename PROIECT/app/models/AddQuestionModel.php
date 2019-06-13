<?php

include_once("app/db.php");

class AddQuestionModel
{
    private $connection;

    public function __construct()
    {
        $this->connection = db::getConnection();
    }

    public function addQuestion($idUser)
    {
        $category = mysqli_real_escape_string($this->connection, $_POST['category']);

        $question = mysqli_real_escape_string($this->connection, $_POST['question']);

        $result = mysqli_query($this->connection, "select id from categorii where nume = '" . $category . "'");

        $categorie = mysqli_fetch_assoc($result)['id'];

        $sql = "INSERT into intrebari (id_utilizator,id_categorie,tip_utilizator,nr_likeuri,nr_dislikeuri,data_adaugare,continut) values ($idUser,$categorie,'" . $_SESSION['login'] . "',0,0,NOW(),'" . $question . "')";

        mysqli_query($this->connection, $sql);

        return "Intrebarea a fost adaugata cu succes";
    }

    public function getSize()
    {
        if (strlen($_POST['question']) > 250)
            return 'Intrebarea depaseste 250 caractere';
        if (strlen($_POST['question']) == 0)
            return 'Intrebarea nu contine niciun caracter';
        return 1;
    }

    public function lastQuestionAdded()
    {
        $result = mysqli_query($this->connection, "select id from intrebari order by id desc");

        $id = mysqli_fetch_assoc($result);

        return $id['id'];
    }
}
