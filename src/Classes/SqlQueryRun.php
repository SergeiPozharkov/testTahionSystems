<?php

namespace App\Classes;

class SqlQueryRun extends Db
{

    /**
     * @param string $sqlQuery
     * @return array
     * @throws \Exception
     */
    public function query(string $sqlQuery): array
    {
        $queryResult = $this->runQuery($sqlQuery);
        if (is_object($queryResult)) {
            $result = [];
            while ($row = $queryResult->fetch_assoc()) {
                $result[] = $row;
            }
            return $result;
        } else {
            throw new \Exception("SQL QUERY ERROR: $sqlQuery");
        }
    }

    /**
     * @param string $sqlQuery
     * @return \mysqli_result|bool
     */
    public function runQuery(string $sqlQuery): \mysqli_result|bool
    {
        return $this->mysqli->query($sqlQuery);
    }
}