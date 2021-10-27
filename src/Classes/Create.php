<?php

namespace App\Classes;

class Create extends TableColumnComments
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    /**
     * Добавляет строку в таблицу БД
     * @param array $data
     * @return int
     * @throws \Exception
     */
    public function insert(array $data): int
    {
        $this->runQuery("INSERT INTO `$this->tableName`" .
            " (`" . implode('`, `', array_keys($data)) . "`)" .
            " VALUES ('" . implode("', '", $data) . "');");
        return $this->mysqli->insert_id;
    }
}