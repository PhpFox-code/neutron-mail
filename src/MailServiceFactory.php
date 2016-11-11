<?php
namespace Phpfox\Mail;

/**
 * Class MailServiceFactory
 *
 * Default MailServiceFactory
 *
 * @package Phpfox\Mail
 */
final class MailServiceFactory
{
    /**
     * @return MailService
     */
    public function factory()
    {
        return new MailService();
    }

    /**
     * @return bool
     */
    public function shouldCache()
    {
        return false;
    }
}