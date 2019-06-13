<?php

include_once("app/models/AddQuestionModel.php");

include_once("app/models/AnswerFormModel.php");

class AddQuestionController
{
    public $model, $answerFormModel;

    public function __construct()
    {
        $this->model = new AddQuestionModel();

        $this->answerFormModel = new AnswerFormModel();
    }

    public function insertQuestion()
    {
        if (isset($_POST['question'])) {
            if ($this->model->getSize() != 1)
                $_SESSION['add-question-error'] = $this->model->getSize();
            else
                $_SESSION['add-question-error'] = $this->model->addQuestion($this->answerFormModel->getIdUser());
        }
    }

    public function lastQuestionAdded()
    {
        return $this->model->lastQuestionAdded();
    }
}
