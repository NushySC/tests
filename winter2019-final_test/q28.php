<?php 
class Product { 
    protected $name = ''; 
    protected $description = ''; 
    protected $price = ''; 
    
    
    function setPrice() { 
        
        ; 
    } 
    function getPrice() { 
        ; 
    } 
    public function __toString()
    {
        return $this->name;
    }

    public static $api_version = "1.0";

    public static function getApiVersion() {
        return $this->api_version;
    }
} 
