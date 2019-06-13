<?php

session_start();

if (isset($_SESSION['login-error'])) {
    unset($_SESSION['login-error']);
}

if (isset($_SESSION['forgot-error'])) {
    unset($_SESSION['forgot-error']);
}

if (isset($_SESSION['crtaccount-error'])) {
    unset($_SESSION['crtaccount-error']);
}

if (isset($_SESSION['answerform-error'])) {
    unset($_SESSION['answerform-error']);
}

if (isset($_SESSION['add-question-error'])) {
    unset($_SESSION['add-question-error']);
}
