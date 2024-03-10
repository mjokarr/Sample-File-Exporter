<?php 
namespace Export;
use Export\Exporter;

class TextExporter extends Exporter {
    private static $type = '.tex';
    
    public function export ()
    {
        $fileName = 'Text-data-' . rand(100, 999) . self::$type;
        $filePath = __DIR__ . '/logs/' . $fileName;
        file_put_contents($filePath, "{$this->data['title']}\n{$this->data['content']}"); 
        echo $fileName . ' Created :)';
    }

}
