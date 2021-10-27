<?php

namespace App\Classes;

class Read extends TableColumnComments
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    /**
     * Считывает все данные из таблицы БД
     * @return array
     * @throws \Exception
     */
    public function getAll(): array
    {
        return $this->query("SELECT * FROM $this->tableName;");
    }

    /**
     * Считывает строку из таблицы БД
     * @param int $id
     * @return array
     * @throws \Exception
     */
    public function getRow(int $id): array
    {
        return $this->query("SELECT * FROM $this->tableName WHERE $this->idName=$id")[0];
    }

}