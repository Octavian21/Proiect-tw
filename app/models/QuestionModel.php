<?php

include_once("app/db.php");

include_once("app/models/AnswerModel.php");

class QuestionModel
{
    private $connection, $model;

    public function __construct()
    {
        $this->connection = db::getConnection();

        $this->model = new AnswerModel();
    }

    public function getQuestions()
    {
        $questions = array();

        $query = "SELECT id,id_utilizator,continut,data_adaugare,tip_utilizator FROM intrebari order by data_adaugare desc";
        if ($result = mysqli_query($this->connection, $query)) {
            while ($row = mysqli_fetch_assoc($result)) {

                $time = strtotime("now") + 60 * 60 - strtotime($row['data_adaugare']);
                $row['data_adaugare'] =  $this->model->transformTime($time);

                $row['id_utilizator'] = $this->getNumeUser($row['id_utilizator'], $row['tip_utilizator']);

                array_push($questions, $row);
            }
        }
        return $questions;
    }

    public function getNumeUser($id_utilizator, $tip_utilizator)
    {
        if ($tip_utilizator == 0)
            $result = mysqli_query($this->connection, "select user from anonimi where id = " . $id_utilizator);
        else
            $result = mysqli_query($this->connection, "select user from utilizatori where id = " . $id_utilizator);

        $user = mysqli_fetch_assoc($result);

        return $user['user'];
    }

    public function getNumberAnswers($id)
    {
        $result = mysqli_query($this->connection, "select count(*) as total from raspunsuri where id_intrebare = " . $id);

        $total = mysqli_fetch_assoc($result);

        return $total['total'];
    }

    public function getNumberQuestions($questions)
    {
        return count($questions);
    }

    public function getEndButton($start, $nrQuestions)
    {
        if ($start  + 10 <= $nrQuestions)
            return $start + 10;
        return $nrQuestions;
    }

    public function getButton()
    {
        if (!isset($_GET['button']) || empty($_GET['button']))
            return 1;

        return $_GET['button'];
    }

    public function getStartButton()
    {
        if (!isset($_GET['button']) || empty($_GET['button']))
            return 0;

        $button = $_GET['button'];

        return $button * 10;
    }
}
