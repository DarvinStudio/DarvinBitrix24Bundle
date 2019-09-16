<?php
/**
 * @author    Alexander Volodin <mr-stanlik@yandex.ru>
 * @copyright Copyright (c) 2019, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Factory;

use Darvin\Bitrix24Bundle\Model\CRM\Lead;
use Darvin\Bitrix24Bundle\UTM\UTMManager;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;

/**
 * Bitrix24 lead factory
 */
class LeadFactory implements LeadFactoryInterface
{
    /**
     * @var \Darvin\Bitrix24Bundle\UTM\UTMManager
     */
    protected $utmManager;

    /**
     * @var \Symfony\Component\PropertyAccess\PropertyAccessorInterface
     */
    protected $propertyAccessor;

    /**
     * @param \Darvin\Bitrix24Bundle\UTM\UTMManager                       $utmManager       UTM Manager
     * @param \Symfony\Component\PropertyAccess\PropertyAccessorInterface $propertyAccessor Property accessor
     */
    public function __construct(UTMManager $utmManager, PropertyAccessorInterface $propertyAccessor)
    {
        $this->utmManager = $utmManager;
        $this->propertyAccessor = $propertyAccessor;
    }

    /**
     * {@inheritDoc}
     */
    public function createLead($title)
    {
        $lead = new Lead($title);

        if ($this->utmManager->has()) {
            $utm = $this->utmManager->get();

            foreach ($utm::getRelations() as $key => $parameter) {
                $this->propertyAccessor->setValue($lead, $key, $this->propertyAccessor->getValue($utm, $parameter));
            }
        }

        return $lead;
    }
}
