<?php
require_once 'VideoInterface.php';

abstract class Video implements VideoInterface
{

    private $source;
    private $embedHtml;
    private $name;
   
    public function __construct($name, $source, $embedHtml)
    {
        $this->source = $source;
        $this->embedHtml = $embedHtml;
        $this->name = $name;
    }

    public function getSource()   {
        return $this->source;
    }

    public function getEmbedHtml()   {
        return $this->embedHtml;
    }


    public function getName()   {
        return $this->name;
    }
}    
    