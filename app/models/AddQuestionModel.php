<?php

include_once("app/db.php");

include_once("app/models/AnswerFormModel.php");

class AddQuestionModel
{
    private $connection, $model;

    public function __construct()
    {
        $this->connection = db::getConnection();

        $this->model = new AnswerFormModel();
    }

    public function addQuestion()
    {
        $result = mysqli_query($this->connection, "select id from categorii where nume = '" . $_POST['category'] . "'");

        $categorie = mysqli_fetch_assoc($result)['id'];

        $utilizator = $this->model->getIdUser();

        $sql = "INSERT into intrebari (id_utilizator,id_categorie,tip_utilizator,nr_likeuri,nr_dislikeuri,data_adaugare,continut) values ($utilizator,$categorie,'" . $_SESSION['login'] . "',0,0,NOW(),'" . $_POST['question'] . "')";

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

    public function lastQuestionAdded($id_utilizator)
    {
        $result = mysqli_query($this->connection, "select id from intrebari where id_utilizator = " . $id_utilizator . " order by id desc");

        $id = mysqli_fetch_assoc($result);

        return $id['id'];
    }
}
