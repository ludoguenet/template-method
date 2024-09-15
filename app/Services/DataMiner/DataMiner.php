<?php

namespace App\Services\DataMiner;

use Exception;
use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\File\UploadedFile as BaseUploadedFile;

abstract class DataMiner
{
    public function mineData(string $path)
    {
        $file = $this->openFile($path);

        $rawData = $this->extractData($file);
        $data = $this->parseData($rawData);

        $analysis = $this->analyzeData($data);

        $this->sendReport($analysis);

        $this->closeFile($file);
    }

    protected function openFile(string $path): UploadedFile
    {
        if (! file_exists($path)) {
            throw new Exception("File does not exist at path: {$path}");
        }

        $originalName = basename($path);

        $mimeType = mime_content_type($path);

        $uploadedFile = new BaseUploadedFile(
            $path,
            $originalName,
            $mimeType,
            null,
            true,
        );

        return UploadedFile::createFromBase($uploadedFile);
    }

    abstract protected function extractData(UploadedFile $file): array;
    abstract protected function parseData(array $rawData): string;

    protected function analyzeData(string $data): string
    {
        echo "Analyzing data...\n";

        return 'analysis';
    }

    protected function sendReport(string $analysis)
    {
        echo "Generating report...\n";
        echo "Report sent...\n";
    }

    protected function closeFile(string $file)
    {
        echo "Closing file...\n";
    }
}
