<?php
require_once '../../vendor/autoload.php';

use App\Classes\Create;

$config = include '../../config.php';

//print_r($_POST);

if (strlen($_POST['name']) > 45) {
    include '../includs/topHtml.php';
    echo <<<ALERT
<div class="alert alert-danger" role="alert">
Длина имени превышает 45 символов!
</div>
ALERT;
    echo "<a href='../show/showAdd.php' class='btn btn-primary'>Вернуться</a>";
    include '../includs/botHtml.php';
    die();
} elseif (strlen($_POST['surname']) > 45) {
    include '../includs/topHtml.php';
    echo <<<ALERT
<div class="alert alert-danger" role="alert">
Длина фамилии превышает 45 символов!
</div>
ALERT;
    echo "<a href='../show/showAdd.php' class='btn btn-primary'>Вернуться</a>";
    include '../includs/botHtml.php';
    die();
} elseif (strlen($_POST['education']) > 100) {
    include '../includs/topHtml.php';
    echo <<<ALERT
<div class="alert alert-danger" role="alert">
Длина информации об образовании превышает 100 символов!
</div>
ALERT;
    echo "<a href='../show/showAdd.php' class='btn btn-primary'>Вернуться</a>";
    include '../includs/botHtml.php';
    die();
} elseif (strlen($_POST['position']) > 45) {
    include '../includs/topHtml.php';
    echo <<<ALERT
<div class="alert alert-danger" role="alert">
Длина информации об образовании превышает 100 символов!
</div>
ALERT;
    echo "<a href='../show/showAdd.php' class='btn btn-primary'>Вернуться</a>";
    include '../includs/botHtml.php';
    die();
} elseif (strlen($_POST['vage']) + 2 > 7 && is_float($_POST['vage'])) {
    include '../includs/topHtml.php';
    echo <<<ALERT
<div class="alert alert-danger" role="alert">
Сумма заработной платы превышает 5 символов!
</div>
ALERT;
    echo "<a href='../show/showAdd.php' class='btn btn-primary'>Вернуться</a>";
    include '../includs/botHtml.php';
    die();
} elseif (is_numeric($_POST['vage']) === false && $_POST['vage'] !== '') {
    include '../includs/topHtml.php';
    echo <<<ALERT
<div class="alert alert-danger" role="alert">
Введён текст, а не число!
</div>
ALERT;
    echo "<a href='../show/showAdd.php' class='btn btn-primary'>Вернуться</a>";
    include '../includs/botHtml.php';
    die();
}

if (isset($_POST) &&
    strlen($_POST['name']) <= 45 &&
    strlen($_POST['surname']) <= 45 &&
    strlen($_POST['education']) <= 100 &&
    strlen($_POST['position']) <= 45 &&
    strlen($_POST['vage']) + 2 <= 7
) {
    $create = new Create($config);
    $create->insert($_POST);
    header("Location: ../index.php");
}

