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

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Compress response event subscriber
 */
class UTMSubscriber implements EventSubscriberInterface
{
    /**
     * @var string
     */
    private $utmClass;

    /**
     * UTMSubscriber constructor.
     *
     * @param string $utmClass
     */
    public function __construct($utmClass)
    {
        $this->utmClass = $utmClass;
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
        $request = $event->getRequest();

        $parameters = array_intersect_key($request->query->all(), $this->utmClass::getRelations());

        if (!empty($parameters)) {
            $request->getSession()->set('utm', new $this->utmClass($parameters));
        }
    }
}
