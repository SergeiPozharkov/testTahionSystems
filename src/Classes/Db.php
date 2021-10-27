<?php

namespace App\Classes;

class Db
{
    protected \mysqli $mysqli;

    public function __construct(array $config)
    {
        $this->mysqli = new \mysqli($config["servername"], $config["username"], $config["password"], $config["dbname"]);
    }
}