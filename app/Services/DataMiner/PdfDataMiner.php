<?php

namespace App\Services\DataMiner;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

class PdfDataMiner extends DataMiner
{
    protected function extractData(UploadedFile $file): array
    {
        echo "Extracting data from PDF file...\n";

        return [
            'data-1' => Str::random(),
            'data-2' => Str::random(),
        ];
    }

    protected function parseData(array $rawData): string
    {
        echo "Extracting data from PDF file...\n";

        return json_encode($rawData);
    }
}
