<?php

require_once '../../vendor/autoload.php';

use App\Classes\Delete;

$config = include '../../config.php';

if (isset($_GET)) {
    $del = new Delete($config);
    $del->delete($_GET['id']);
    header("Location: ../index.php");
}
