<?php

include_once("app/models/AnswerFormModel.php");

class AnswerFormController
{
    public $model;

    public function __construct()
    {
        $this->model = new AnswerFormModel();
    }

    public function insertAnswer()
    {
        if (isset($_POST['message'])) {
            $result = $this->model->getSize();
            if ($result != 1)
                $_SESSION['answerform-error'] = $result;
            else
                $_SESSION['answerform-error'] = $this->model->insertAnswer();
        }
    }
}
