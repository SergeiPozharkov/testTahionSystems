<?php
require_once '../../vendor/autoload.php';

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
    <title>Create</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <?php
            $config = include '../../config.php';

            $tableHeaders = new TableColumnComments($config);
            $headers = $tableHeaders->columnComments();
            unset($headers['id']);
            ?>
            <h2>Форма добавления</h2>
            <form action="../operations/add.php" method="post">
                <?php
                foreach ($headers as $key => $value) {
                    if ($key == 'birth_date') {
                        echo "<label for='$key'>$value: </label><input type='date' class='form-control' name='$key'><br>";
                    } else {
                        echo "<label for='$key'>$value: </label><input type='text' class='form-control' name='$key' placeholder='$value' id='$key'><br>";
                    }
                }
                ?>

                <input type="submit" class="btn btn-success" value="Добавить">
            </form>
        </div>
        <div class="col">
        </div>
    </div>
</div>

</body>
</html>

