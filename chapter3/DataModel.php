<?php

abstract class dataModel 

{
    protected string $tableName = 'random-table-name <br>';

    public function save()
    {
        print_r('Saving data to table: ' . $this->tableName);
    }
}
