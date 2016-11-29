<?php

namespace Neutron\Mail;


interface TransportInterface
{
    public function send($item);
}