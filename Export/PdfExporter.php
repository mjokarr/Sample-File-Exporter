<?php 
namespace Export;
use Export\Exporter;

    class PdfExporter extends Exporter {
    private static $type = '.pdf';

    public function export ()
    {
        $fileName = 'Pdf-data-' . rand(100, 999) . self::$type;
        $filePath = __DIR__ . '/logs/' . $fileName;
        file_put_contents($filePath, "{$this->data['title']}\n{$this->data['content']}]");
        echo $fileName . ' Created:)';
    }
}
