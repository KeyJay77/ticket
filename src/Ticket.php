<?php 

namespace App;

class Ticket
{
    private $stadium;
    private $matchname;
    private $matchdate;
    private $sector;
    private $row;
    private $place;
    private $price;
    private $owner;
    private $qr;
    private $email;
    public function __set($name, $value)
    {
        switch ($name)
        {
            case 'stadium':
                $this->stadium = $value;
                return $this;
            case 'match_name':
                $this->matchname = $value;
                return $this;
            case 'match_date':
                $this->matchdate = $value;
                return $this;
            case 'sector':
                $this->sector = $value;
                return $this;
            case 'row':
                $this->row = $value;
                return $this;
            case 'place':
                $this->place = $value;
                return $this;
            case 'price':
                $this->price = $value;
                return $this;
            case 'owner':
                $this->owner = $value;
                return $this;
            case 'qr':
                $this->qr = $value;
                return $this;
            case 'email':
                $this->email = $value;
                return $this;
            default:                
                break;   
        }
    }
}