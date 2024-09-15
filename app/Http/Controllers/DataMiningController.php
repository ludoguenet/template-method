<?php

namespace App\Http\Controllers;

use App\Services\DataMiner\DocDataMiner;
use App\Services\DataMiner\PdfDataMiner;
use App\Services\DataMiner\CsvDataMiner;

class DataMiningController extends Controller
{
    public function processDocFile()
    {
        $docMiner = new DocDataMiner();
        // $docMiner->mineData();
    }

    public function processPdfFile()
    {
        $pdfMiner = new PdfDataMiner();

        $pdfMiner->mineData(storage_path('blank.pdf'));
    }

    public function processCsvFile()
    {
        $csvMiner = new CsvDataMiner();
        // $csvMiner->mineData();
    }
}
