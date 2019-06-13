<?php

include_once("app/models/AnswerModel.php");

class AnswerController
{
    public $model, $idIntrebare;

    public function __construct()
    {
        $this->model = new AnswerModel();

        $this->idIntrebare = $this->getIdQuestion();
    }

    public function getIdQuestion()
    {
        $res = $this->model->getIdQuestion();
        $_SESSION['question'] = $res;

        return $res;
    }

    public function getNames()
    {
        return $this->model->getNames($this->idIntrebare);
    }
    public function getInfo()
    {
        return $this->model->getInfo($this->idIntrebare);
    }
    public function setDislike()
    {
        return $this->model->setDislike($this->idIntrebare);
    }

    public function setLike()
    {
        return $this->model->setLike($this->idIntrebare);
    }
}
