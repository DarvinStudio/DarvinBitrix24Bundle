<?php declare(strict_types=1);
/**
 * @author    Igor Nikolaev <igor.sv.n@gmail.com>
 * @copyright Copyright (c) 2020, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Request\Command\Factory\CRM;

use Darvin\Bitrix24Bundle\Model\CRM\Lead;
use Darvin\Bitrix24Bundle\Model\CRM\ProductRow;
use Darvin\Bitrix24Bundle\Request\Command\Command;
use Darvin\Bitrix24Bundle\Value\ValueFormatter;

/**
 * Lead command factory
 */
class LeadCommandFactory implements LeadCommandFactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function createAddCommand(Lead $lead, bool $registerSonetEvent = true): Command
    {
        return new Command('crm.lead.add', [
            'fields' => $lead->getData(),
            'params' => [
                'REGISTER_SONET_EVENT' => ValueFormatter::format($registerSonetEvent),
            ],
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function createSetProductRowsCommand(string $id, array $rows): Command
    {
        return new Command('crm.lead.productrows.set', [
            'id'   => $id,
            'rows' => array_map(function (ProductRow $row): array {
                return $row->getData();
            }, $rows),
        ]);
    }
}
