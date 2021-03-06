<?php

include_once("app/models/LoginModel.php");

class LoginController
{
    public $model;

    public function __construct()
    {
        $this->model = new LoginModel();
    }

    public function login()
    {
        if (!isset($_SESSION['login'])) {
            $_SESSION['login'] = 0;
        }

        if (!isset($_SESSION['anonim-nume'])) {
            $_SESSION['anonim-nume'] = $this->model->generateAnonim();
        }

        if (isset($_POST['login'])) {
            $result = $this->model->getLogin();
            if ($result == 'login') {
                $_SESSION['login'] = 1;
                $_SESSION['login-nume'] = $_POST['username'];
                unset($_SESSION['login-error']);
            } else {
                $_SESSION['login'] = 0;
                $_SESSION['login-error'] = $result;
            }
        }
    }
}
