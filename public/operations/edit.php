<?php

require_once '../../vendor/autoload.php';

use App\Classes\Update;

$config = include '../../config.php';

if (strlen($_POST['name']) > 45) {
    include '../includs/topHtml.php';
    echo <<<ALERT
<div class="alert alert-danger" role="alert">
Длина имени превышает 45 символов!
</div>
ALERT;
    echo "<a href='../index.php' class='btn btn-primary'>Вернуться</a>";
    include '../includs/botHtml.php';
    die();
} elseif (strlen($_POST['surname']) > 45) {
    include '../includs/topHtml.php';
    echo <<<ALERT
<div class="alert alert-danger" role="alert">
Длина фамилии превышает 45 символов!
</div>
ALERT;
    echo "<a href='../index.php' class='btn btn-primary'>Вернуться</a>";
    include '../includs/botHtml.php';
    die();
} elseif (strlen($_POST['education']) > 100) {
    include '../includs/topHtml.php';
    echo <<<ALERT
<div class="alert alert-danger" role="alert">
Длина информации об образовании превышает 100 символов!
</div>
ALERT;
    echo "<a href='../index.php' class='btn btn-primary'>Вернуться</a>";
    include '../includs/botHtml.php';
    die();
} elseif (strlen($_POST['position']) > 45) {
    include '../includs/topHtml.php';
    echo <<<ALERT
<div class="alert alert-danger" role="alert">
Длина информации об образовании превышает 100 символов!
</div>
ALERT;
    echo "<a href='../index.php' class='btn btn-primary'>Вернуться</a>";
    include '../includs/botHtml.php';
    die();
} elseif (strlen($_POST['vage']) > 7) {
    include '../includs/topHtml.php';
    echo <<<ALERT
<div class="alert alert-danger" role="alert">
Сумма заработной платы превышает 5 символов!
</div>
ALERT;
    echo "<a href='../index.php' class='btn btn-primary'>Вернуться</a>";
    include '../includs/botHtml.php';
    die();
} elseif (is_numeric($_POST['vage']) === false) {
    include '../includs/topHtml.php';
    echo <<<ALERT
<div class="alert alert-danger" role="alert">
Введён текст, а не число!
</div>
ALERT;
    echo "<a href='../index.php' class='btn btn-primary'>Вернуться</a>";
    include '../includs/botHtml.php';
    die();
}


if (isset($_POST) &&
    strlen($_POST['name']) <= 45 &&
    strlen($_POST['surname']) <= 45 &&
    strlen($_POST['education']) <= 100 &&
    strlen($_POST['position']) <= 45 &&
    strlen($_POST['vage']) <= 7
) {
    $id = $_POST['id'];
    unset($_POST['id']);

    $update = new Update($config);
    $update->update($id, $_POST);
    header("Location: ../index.php");
}
