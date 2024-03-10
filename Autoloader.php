<?php

spl_autoload_register(function ($fileName)
{
    $filePath = __DIR__ . '\\' . $fileName . '.php';
    if(!file_exists($filePath) && !is_readable($filePath))
    {
        echo 'Your File Address Is Invalid';
        return false;
    }
    include $filePath;
});
