<?php 
namespace Export;

use Export\Interfaces\Exportable;

Abstract class Exporter implements Exportable {
    # Properties: 
    protected $data;

    # Methods: 
    public function __construct ($data) 
    {
        $this->data = $data;
        if(!$this->Validation())
        {
            die("ERROR: Invalid data Passed To Exporter!!!");
        }
    }

    public function Validation()
    {
        foreach ($this->data as $fields)
        {
            if(empty($fields))
            {
                return false;
            }
        }
        return true;
    }
    
}

