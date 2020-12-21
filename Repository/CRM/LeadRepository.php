<?php declare(strict_types=1);
/**
 * @author    Igor Nikolaev <igor.sv.n@gmail.com>
 * @copyright Copyright (c) 2019, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Repository\CRM;

use Darvin\Bitrix24Bundle\Client\ClientInterface;
use Darvin\Bitrix24Bundle\Model\CRM\Lead;
use Darvin\Bitrix24Bundle\Value\ValueFormatter;

/**
 * Lead repository
 *
 * @deprecated
 */
class LeadRepository implements LeadRepositoryInterface
{
    /**
     * @var \Darvin\Bitrix24Bundle\Client\ClientInterface
     */
    private $client;

    /**
     * @param \Darvin\Bitrix24Bundle\Client\ClientInterface $client Client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * {@inheritDoc}
     */
    public function add(Lead $lead, bool $registerSonetEvent = true)
    {
        return $this->client->call('crm.lead.add', $lead->getFields(), [
            'REGISTER_SONET_EVENT' => ValueFormatter::format($registerSonetEvent),
        ]);
    }
}
