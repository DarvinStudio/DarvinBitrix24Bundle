<?php declare(strict_types=1);
/**
 * @author    Alexander Volodin <mr-stanlik@yandex.ru>
 * @copyright Copyright (c) 2019, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Lead;

use Darvin\Bitrix24Bundle\Model\CRM\Lead;
use Darvin\Bitrix24Bundle\UTM\UTMManagerInterface;

/**
 * Lead factory
 */
class LeadFactory implements LeadFactoryInterface
{
    /**
     * @var \Darvin\Bitrix24Bundle\UTM\UTMManagerInterface
     */
    private $utmManager;

    /**
     * @param \Darvin\Bitrix24Bundle\UTM\UTMManagerInterface $utmManager UTM Manager
     */
    public function __construct(UTMManagerInterface $utmManager)
    {
        $this->utmManager = $utmManager;
    }

    /**
     * {@inheritDoc}
     */
    public function createLead(string $title): Lead
    {
        $lead = new Lead($title);

        if ($this->utmManager->hasUTM()) {
            $utm = $this->utmManager->getUTM();

            $lead->setUtmCampaign($utm->getCampaign());
            $lead->setUtmContent($utm->getContent());
            $lead->setUtmMedium($utm->getMedium());
            $lead->setUtmSource($utm->getSource());
            $lead->setUtmTerm($utm->getTerm());
        }

        return $lead;
    }
}
