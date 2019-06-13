<?php

include_once("app/db.php");

class AnswerGroupModel
{
    private $connection, $model;

    public function __construct()
    {
        $this->connection = db::getConnection();
    }

    public function getAnswers($time)
    {
        $answers = array();

        $query = "SELECT id_intrebare,id_utilizator,tip_utilizator FROM raspunsuri where data_adaugare >= DATE_SUB(NOW(), interval 1 " . $time . " ) ORDER BY nr_likeuri desc LIMIT 4";
        if ($result = mysqli_query($this->connection, $query)) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($answers, $row);
            }
        }
        return $answers;
    }
}
