<?php
namespace MyProject;
class TicketBuilder
{
    private $t;

    public function __construct()
    {
        $this->t = new Ticket();
    }

    public function setStadium($value)
    {
        $this->t->stadium = $value;
        return $this->t;
    }

    public function setMatchName($value) {
        $this->t->match_name = $value;
        return $this->t;
    }

    public function setMatchDate($value) {
        $this->t->match_date = $value;
        return $this->t;
    }

    public function setSector($value) {
        $this->t->sector = $value;
        return $this->t;
    }

    public function setRow($value) {
        $this->t->row = $value;
        return $this->t;
    }

    public function setPlace($value) {
        $this->t->place = $value;
        return $this->t;
    }

    public function setPrice($value) {
        $this->t->price = $value;
        return $this->t;
    }

    public function setOwner($value) {
        $this->t->owner = $value;
        return $this->t;
    }

    public function setQr($value) {
        $this->t->qr = $value;
        return $this->t;
    }

    public function setEmail($value) {
        $this->t->email = $value;
        return $this->t;
    }

}