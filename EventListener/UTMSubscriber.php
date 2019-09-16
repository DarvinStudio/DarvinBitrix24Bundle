<?php
/**
 * @author    Alexander Volodin <mr-stanlik@yandex.ru>
 * @copyright Copyright (c) 2019, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\EventListener;

use Darvin\Bitrix24Bundle\Model\UTM;
use Darvin\Bitrix24Bundle\UTM\UTMManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Compress response event subscriber
 */
class SetUTMSubscriber implements EventSubscriberInterface
{
    /**
     * @var \Darvin\Bitrix24Bundle\UTM\UTMManagerInterface
     */
    protected $utmManager;

    protected static $PREFIX = 'utm_';

    /**
     * @param \Darvin\Bitrix24Bundle\UTM\UTMManagerInterface $utmManager UTM Manager
     */
    public function __construct(UTMManagerInterface $utmManager)
    {
        $this->utmManager = $utmManager;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => 'createUTM',
        ];
    }

    /**
     * @param \Symfony\Component\HttpKernel\Event\GetResponseEvent $event Event
     */
    public function createUTM(GetResponseEvent $event)
    {
        $set = false;
        $utm = new UTM();

        foreach ($event->getRequest()->query->all() as $name => $value) {
            if (0 !== strpos($name, self::$PREFIX)) {
                continue;
            }

            $method = sprintf('set%s', ucfirst(preg_replace(sprintf('/^%s/', self::$PREFIX), '', $name)));

            if (method_exists($utm, $method)) {
                $utm->$method($value);

                $set = true;
            }
        }
        if ($set) {
            $this->utmManager->setUTM($utm);
        }
    }
}
