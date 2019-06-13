<?php

include_once("app/models/CreateAccountModel.php");
include_once("app/models/LoginModel.php");

class CreateAccountController
{
    public $model;

    public $modelLogin;

    public function __construct()
    {
        $this->model = new CreateAccountModel();

        $this->modelLogin = new LoginModel();
    }
    public function createAccount()
    {
        if (isset($_POST['crtaccount'])) {
            $result = $this->model->getCreateAccountErrors();
            $_SESSION['crtaccount-error'] = $result;
            if ($result === 'Contul a fost creat cu succes') {
                $_SESSION['login'] = 1;
                $_SESSION['login-nume'] = $this->modelLogin->getNume();
                unset($_SESSION['crtaccount-error']);
            }
        }
    }
}
