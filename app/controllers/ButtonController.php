<?php

include_once("app/models/ButtonModel.php");

include_once("app/models/QuestionModel.php");

class ButtonController
{
    public $model, $questionModel;

    public static $start = 6;
    public static $end = 0;

    public function __construct()
    {
        $this->model = new ButtonModel();
        $this->questionModel = new QuestionModel();
    }

    public function getButton()
    {
        return $this->model->getButton();
    }

    public function noResults()
    {
        if ($this->questionModel->getNumberQuestions($this->questionModel->getQuestions()) < ($this->getButton() * 10))
            return 0;
        return 1;
    }
    public function getStartLeftButton()
    {
        return  $this->model->getButton();
    }
    public function getEndRightButton()
    {
        return $this->model->getButton() + 5;
    }
}
