<?php

include_once("app/models/AnswerModel.php");

class AnswerController
{
    public $model;

    public function __construct()
    {
        $this->model = new AnswerModel();
    }

    public function getAnswers($id_question)
    {
        return $this->model->getAnswers($id_question);
    }
}
