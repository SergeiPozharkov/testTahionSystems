<?php

namespace App\Classes;

class Update extends TableColumnComments
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    /**
     * Изменяет строку в таблице
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $array = [];
        foreach ($data as $key => $value) {
            $array[] = "`$key` = '$value'";
        }
        $setValues = implode(", ", $array);

        $sql = "UPDATE `$this->tableName` SET $setValues WHERE `$this->idName` = $id;";

        return $this->runQuery($sql);
    }
}