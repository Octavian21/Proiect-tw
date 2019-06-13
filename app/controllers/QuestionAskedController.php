<?php

include_once("app/models/QuestionAskedModel.php");

include_once("app/models/QuestionModel.php");

class QuestionAskedController
{
    public $model, $questionModel, $idIntrebare;

    public function __construct()
    {
        $this->model = new QuestionAskedModel();
        $this->questionModel = new QuestionModel();

        $this->idIntrebare = $this->model->getIdQuestion();
    }
    public function getIdQuestion()
    {
        $res = $this->model->getIdQuestion();
        $_SESSION['question'] = $res;

        return $res;
    }
    public function getQuestion()
    {
        return $this->model->getQuestion($this->idIntrebare);
    }
    public function getNumberAnswers()
    {
        return $this->model->getNumberAnswers($this->idIntrebare);
    }
}
