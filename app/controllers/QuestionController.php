<?php

include_once("app/models/QuestionModel.php");

class QuestionController
{
    public $model;

    public function __construct()
    {
        $this->model = new QuestionModel();
    }
    public function getQuestions()
    {
        return $this->model->getQuestions();
    }
}
