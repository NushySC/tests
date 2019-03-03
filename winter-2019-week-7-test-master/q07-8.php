<?php

// class declaration here
class Address 
{
   public $name = null;
   public $street = null;
   public $house_nr = null;
   public $city = null;
   public $country = null;
   public $postal_code = null;
   
   protected static $local_country = null;

   public function setLocalCountry($country) 
    {
    Address::$local_country = $country;
    }

    
    public function isLocal()
    {
        if ($this->country == static::$local_country) {
            return true;
        } else {
            return false;
        }
    }


}