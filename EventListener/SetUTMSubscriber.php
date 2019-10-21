<?php declare(strict_types=1);
/**
 * @author    Alexander Volodin <mr-stanlik@yandex.ru>
 * @copyright Copyright (c) 2019, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\EventListener;

use Darvin\Bitrix24Bundle\UTM\Model\UTM;
use Darvin\Bitrix24Bundle\UTM\UTMManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Set UTM event subscriber
 */
class SetUTMSubscriber implements EventSubscriberInterface
{
    const PARAM_PREFIX = 'utm_';

    /**
     * @var \Darvin\Bitrix24Bundle\UTM\UTMManagerInterface
     */
    private $utmManager;

    /**
     * @param \Darvin\Bitrix24Bundle\UTM\UTMManagerInterface $utmManager UTM manager
     */
    public function __construct(UTMManagerInterface $utmManager)
    {
        $this->utmManager = $utmManager;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => 'setUTM',
        ];
    }

    /**
     * @param \Symfony\Component\HttpKernel\Event\GetResponseEvent $event Event
     */
    public function setUTM(GetResponseEvent $event): void
    {
        $set = false;
        $utm = new UTM();

        foreach ($event->getRequest()->query->all() as $name => $value) {
            if (0 !== strpos($name, self::PARAM_PREFIX)) {
                continue;
            }

            $method = sprintf('set%s', ucfirst(preg_replace(sprintf('/^%s/', self::PARAM_PREFIX), '', $name)));

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
