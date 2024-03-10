<?php
include './Autoloader.php';

# Validation: 
# All methods type most be POST. 
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    var_dump('ERROR: Invalid Request Method!');
    die;
}

# Create white list and get form inputs and set that as variables.
[$title, $content, $format] = [$_POST['title'], $_POST['content'], $_POST['format']];
$whiteLlist = ['Text', 'Json', 'Pdf'];

# Validation:
# All Inputs most be set.
if(!isset($title) || !isset($content)  || !isset($format)) 
{
    var_dump('Please Set Every Data!');
    die;
}

# Validation:
# All Inputs can not be empty.
if(empty($title) || empty($content) || empty($format))
{
    var_dump('Your Data Is Imperfect!');
    die;
}
# Validation:
# All Formats most be valid.
if (!in_array($format, $whiteLlist)) {
    var_dump('Your File Format Is Invalid :)');
    die;
}

# All classes must be in the Export folder for the class name constructor variable to work properly...
$className = 'Export\\' . $format . 'Exporter';

# Validation: 
# the Class name must exist.
if(class_exists($className)) 
{
    $export = new $className(['title' => $title, 'content' => $content]);   
    $export->export();
}