<?php

require_once 'CsvFileReader.php';

class StockManager
{
    public function updateStockFromFlie(string $filename, FileReaderInterface $fileReader)
    {
        $stockItems = $fileReader->readFileAssociativeArray($filename);

        foreach ($stockItems as $stockItem){
            print 'Updating the database with item: ' . $stockItem['name'] . '<br>';
        }
    }
}