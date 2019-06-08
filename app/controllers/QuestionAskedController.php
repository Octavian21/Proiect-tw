<?php

include_once("app/models/QuestionAskedModel.php");

include_once("app/models/QuestionModel.php");

class QuestionAskedController
{
    public $model, $questionModel;

    public function __construct()
    {
        $this->model = new QuestionAskedModel();
        $this->questionModel = new QuestionModel();
    }
    public function getQuestion($id_intrebare)
    {
        return $this->model->getQuestion($id_intrebare);
    }
    public function getNumberAnswers($idIntrebare)
    {
        return $this->questionModel->getNumberAnswers($idIntrebare);
    }
}
