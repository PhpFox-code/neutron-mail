<?php
namespace Phpfox\Mail;

/**
 * Class MailServiceFactory
 *
 * @package Phpfox\Mail
 */
class MailServiceFactory
{
    public function factory()
    {
        return new MailService();
    }

    public function shouldCache()
    {
        return false;
    }

}