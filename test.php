<?php
use MyProject\TicketBuilder;

require 'src\Ticket.php';
require 'src\TicketBuilder.php';

$builder = new TicketBuilder();
$builder->setStadium("ogarev_arena");

var_dump($builder);