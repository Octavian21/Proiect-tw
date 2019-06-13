<?php

include_once("app/controllers/AnswerController.php");

class AnswersPanelController
{
    public $model, $question;

    public function __construct()
    {
        $this->model = new AnswerController();

        $this->question = $this->model->getIdQuestion();
    }

    public function getError()
    {
        if ($this->question)
            return 1;
        return 0;
    }
}
