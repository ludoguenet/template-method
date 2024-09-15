<?php

namespace App\Services\DataMiner;

class CsvDataMiner extends DataMiner
{
    protected function openFile()
    {
        echo "Opening CSV file...\n";
    }

    protected function extractData()
    {
        echo "Extracting data from CSV file...\n";
    }
}
