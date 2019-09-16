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
use Darvin\Bitrix24Bundle\UTM\UTMManager;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Compress response event subscriber
 */
class UTMSubscriber implements EventSubscriberInterface
{
    /**
     * @var \Darvin\Bitrix24Bundle\UTM\UTMManager
     */
    protected $utmManager;

    /**
     * @param \Darvin\Bitrix24Bundle\UTM\UTMManager $utmManager UTM Manager
     */
    public function __construct(UTMManager $utmManager)
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
        $request = $event->getRequest();

        $parameters = array_intersect_key($request->query->all(), UTM::getRelations());

        if (!empty($parameters)) {
            $this->utmManager->set(new UTM($parameters));
        }
    }
}
