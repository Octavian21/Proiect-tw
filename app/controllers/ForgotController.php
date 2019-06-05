<?php

include_once("app/models/ForgotModel.php");

class ForgotController
{
    public $model;

    public function __construct()
    {
        $this->model = new ForgotModel();
    }
    public function setPassword()
    {
        if (isset($_POST['forgot'])) {
            $result = $this->model->getPasswordErrors();
            if ($result != 'succes')
                $_SESSION['forgot-error'] = $result;
            else {
                $result = $this->model->sendPassword();
                $_SESSION['forgot-error'] = $result;
            }
            header('Location: index.php', false);
            die();
        }
    }
}
