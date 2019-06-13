<?php

include_once("app/db.php");

class ButtonModel
{
    private $connection, $model;

    public function __construct()
    {
        $this->connection = db::getConnection();
    }

    public function getButton()
    {
        if (!isset($_GET['button']) || empty($_GET['button']))
            return 1;

        return $_GET['button'];
    }
}
