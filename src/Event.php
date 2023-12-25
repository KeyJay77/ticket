<?php

namespace App;

class Event
{
    private $matchname;
    private $stadium;
    private $matchdate;
    private $price;

    public function __construct($matchname, $stadium, $matchdate, $price)
    {
        $this->matchname = $matchname;
        $this->stadium = $stadium;
        $this->matchdate = $matchdate;
        $this->price = $price;
    }

    public function __set($name, $value)
    {
        switch ($name)
        {
            case 'stadium':
                $this->stadium = $value;
                return $this;
            case 'matchname':
                $this->matchname = $value;
                return $this;
            case 'matchdate':
                $this->matchdate = $value;
                return $this;
            case 'price':
                $this->price = $value;
                return $this;
            default:                
                break;   
        }
    }

    public function __get($name, $value)
    {
        switch ($name)
        {
            case 'stadium':
                return $this->stadium;
            case 'matchname':
                return $this->matchname;
            case 'matchdate':
                return $this->matchdate;
            case 'price':
                return $this->price;
            default:                
                break;   
        }
    }
}