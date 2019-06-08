<?php

include_once("app/db.php");

include_once("app/models/AnswerModel.php");

include_once("app/models/QuestionModel.php");

class QuestionAskedModel
{
    private $connection, $answerModel, $questionModel;

    public function __construct()
    {
        $this->connection = db::getConnection();

        $this->answerModel = new AnswerModel();

        $this->questionModel = new QuestionModel();
    }

    public function getQuestion($id_intrebare)
    {
        $query = "SELECT id_utilizator,continut,data_adaugare,tip_utilizator FROM intrebari where id = " . $id_intrebare;
        if ($result = mysqli_query($this->connection, $query)) {
            $question = mysqli_fetch_assoc($result);

            $time = strtotime("now") + 60 * 60 - strtotime($question['data_adaugare']);
            $question['data_adaugare'] =  $this->answerModel->transformTime($time);

            $question['id_utilizator'] = $this->questionModel->getNumeUser($question['id_utilizator'], $question['tip_utilizator']);
        }
        return $question;
    }
}
