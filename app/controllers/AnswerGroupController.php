<?php

include_once("app/models/AnswerGroupModel.php");

include_once("app/models/QuestionModel.php");

class AnswerGroupController
{
    public $model, $questionModel;

    public function __construct()
    {
        $this->model = new AnswerGroupModel();

        $this->questionModel = new QuestionModel();
    }
    public function getAnswers($time)
    {
        $answers = $this->model->getAnswers($time);

        for ($i = 0; $i < count($answers); $i++)
            $answers[$i]['id_utilizator'] = $this->questionModel->getNumeUser($answers[$i]['id_utilizator'], $answers[$i]['tip_utilizator']);

        return $answers;
    }
}
