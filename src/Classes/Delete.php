<?php

namespace App\Classes;

class Delete extends TableColumnComments
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    /**
     * Удаляет строку из таблицы БД
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->runQuery("DELETE FROM $this->tableName  WHERE $this->idName=$id;");
    }
}