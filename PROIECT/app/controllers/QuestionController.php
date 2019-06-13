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
    public function getStartButton()
    {
        return $this->model->getStartButton();
    }

    public function getEndButton()
    {
        return $this->model->getEndButton($this->model->getStartButton(), $this->model->getNumberQuestions($this->getQuestions()));
    }

    public function getButton()
    {
        return $this->model->getButton();
    }
}
