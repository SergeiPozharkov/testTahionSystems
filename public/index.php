<?php

require_once '../vendor/autoload.php';

use App\Classes\Read;
use App\Classes\Table;
use App\Classes\TableColumnComments;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
<?php
$config = include '../config.php';

$tableHeaders = new TableColumnComments($config);
$read = new Read($config);
$data = $read->getAll();

$headers = $tableHeaders->columnComments();

$headers['delete'] = 'Удаление';
$headers['edit'] = 'Редактирование';

foreach ($data as &$rowDate) {
    $rowDate['birth_date'] = date('d-m-Y', strtotime($rowDate['birth_date']));
}

echo (new Table)
    ->setData($data)
    ->setHeaders($headers)
    ->setClass('table table-dark table-striped')
    ->addColumn(fn($value) => "<a class='btn btn-danger' onclick='confirmCheck(this)'  href='operations/del.php?id=$value[id]'>Удалить</a>")
    ->addColumn(fn($value) => "<a class='btn btn-warning' href='show/showEdit.php?id=$value[id]'>Редактировать</a>")
    ->render();
?>
<a href="show/showAdd.php" class="btn btn-primary">Добавить сотрудника</a>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>