<?php

namespace App\Services\DataMiner;

class DocDataMiner extends DataMiner
{
    protected function openFile()
    {
        echo "Opening DOC file...\n";
    }

    protected function extractData()
    {
        echo "Extracting data from DOC file...\n";
    }
}
