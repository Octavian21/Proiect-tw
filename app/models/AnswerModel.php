<?php

include_once("app/db.php");

class AnswerModel
{
    private $connection;

    public function __construct()
    {
        $this->connection = db::getConnection();
    }

    public function getIdQuestion()
    {
        if (isset($_GET['question']) && !empty($_GET['question']))
            if ($this->existIdQuestion($_GET['question']))
                return $_GET['question'];
        return 0;
    }

    public function existIdQuestion($id_intrebare)
    {
        $res = mysqli_query($this->connection, "select * from intrebari where id = " . $id_intrebare);

        return mysqli_num_rows($res);
    }

    public function getAnswers($id_intrebare)
    {
        $answers = array();

        $res = mysqli_query($this->connection, "select continut from raspunsuri where id_intrebare = " . $id_intrebare);

        while ($data = mysqli_fetch_assoc($res)) {
            array_push($answers, $data['continut']);
        }

        return $answers;
    }

    public function getNames($id_intrebare)
    {
        $names = array();

        $res = mysqli_query($this->connection, "select id_utilizator, tip_utilizator from raspunsuri where id_intrebare = " . $id_intrebare);

        while ($data = mysqli_fetch_assoc($res)) {

            if ($data['tip_utilizator'] == 0) {

                $anonimi = mysqli_query($this->connection, "select user from anonimi where id = " . $data['id_utilizator']);

                $name = mysqli_fetch_assoc($anonimi)['user'];

                array_push($names, $name);
            } else {
                $utilizatori = mysqli_query($this->connection, "select user from utilizatori where id = " . $data['id_utilizator']);

                $name = mysqli_fetch_assoc($utilizatori)['user'];

                array_push($names, $name);
            }
        }

        return $names;
    }

    public function getDates($id_intrebare)
    {
        $dates = array();

        $res = mysqli_query($this->connection, "select data_adaugare from raspunsuri where id_intrebare = " . $id_intrebare);

        while ($data = mysqli_fetch_assoc($res)) {
            $time = strtotime("now") + 60 * 60 - strtotime($data['data_adaugare']);
            array_push($dates, $this->transformTime($time));
        }

        return $dates;
    }
    public function transformTime($seconds)
    {
        $minutes = round($seconds / 60);

        if ($minutes < 60)
            return $minutes . " minutes ago";

        if ($minutes < 60 * 24)
            return round($minutes / 60) . " hours ago";

        if ($minutes < 60 * 24 * 7)
            return round($minutes / (60 * 24)) . " days ago";

        return round($minutes / (60 * 24 * 7)) . " weeks ago";
    }
}
