<?php
namespace Phpfox\MailManager;

/**
 * Class MailServiceFactory
 *
 * Default MailServiceFactory
 *
 * @package Phpfox\MailManager
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