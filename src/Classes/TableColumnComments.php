<?php

namespace App\Classes;

class TableColumnComments extends SqlQueryRun
{
    protected string $tableName;
    protected string $idName = 'id';

    public function __construct(array $config)
    {
        parent::__construct($config);
        $this->setTableName($config['table']);
    }

    /**
     * @param string $tableName
     * @return $this
     */
    public function setTableName(string $tableName): static
    {
        $this->tableName = $tableName;
        return $this;
    }

    /**
     * Берет данные из комментариев к столбцам таблицы БД
     * для заголовков html таблицы
     * @return array
     * @throws \Exception
     */
    public function columnComments(): array
    {
        $table = $this->query("SHOW FULL COLUMNS FROM `$this->tableName`;");
        $result = [];
        foreach ($table as $field) {
            $result[$field['Field']] = $field['Comment'];
        }
        return $result;
    }
}