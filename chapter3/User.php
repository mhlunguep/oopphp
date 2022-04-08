<?php

require_once 'DataModel.php';

class User extends DataModel
{
    protected string $tableName = "User Table";

    public function getTableName()
    {
        return $this->tableName;
    }
}