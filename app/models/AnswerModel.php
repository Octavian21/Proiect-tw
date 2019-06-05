<?php

include_once("app/db.php");

class AnswerModel
{
    private $connection;

    public function __construct()
    {
        $this->connection = db::getConnection();
    }

    public function getAnswers($id_intrebare)
    {
        $answers = array();

        $res = mysqli_query($this->connection, "select continut from raspunsuri where id_intrebare = '" . $id_intrebare . "'");

        while ($data = mysqli_fetch_assoc($res)) {
            array_push($answers, $data['continut']);
        }

        return $answers;
    }
}
