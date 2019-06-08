<?php

include_once("app/models/AnswerModel.php");

class AnswerController
{
    public $model;

    public function __construct()
    {
        $this->model = new AnswerModel();
    }

    public function getIdQuestion()
    {
        $result = $this->model->getIdQuestion();
        $_SESSION['question'] = $result;

        return $result;
    }

    public function getAnswers($id_question)
    {
        return $this->model->getAnswers($id_question);
    }
    public function getNames($id_question)
    {
        return $this->model->getNames($id_question);
    }
    public function getDates($id_question)
    {
        return $this->model->getDates($id_question);
    }
}
