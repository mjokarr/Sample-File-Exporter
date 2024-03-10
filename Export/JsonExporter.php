<?php 
namespace Export;
use Export\Exporter;

class JsonExporter extends Exporter {
    private static $type = '.json';

    public function export ()
    {
        $fileName = 'Json-data-' . rand(100, 999) . self::$type;
        $filePath = __DIR__ . '/logs/' . $fileName;
        file_put_contents($filePath, json_encode($this->data));
        echo $fileName . ' Created:)';
    }
}

