<?php

namespace Phpfox\MailManager;


interface TransportInterface
{
    public function send($item);
}