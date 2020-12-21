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
use Darvin\Bitrix24Bundle\Request\Command\Command;

/**
 * Lead command factory
 */
interface LeadCommandFactoryInterface
{
    /**
     * @param \Darvin\Bitrix24Bundle\Model\CRM\Lead $lead               Lead
     * @param bool                                  $registerSonetEvent Произвести регистрацию события добавления лида в живой ленте.
     *
     * @return \Darvin\Bitrix24Bundle\Request\Command\Command
     */
    public function createAddCommand(Lead $lead, bool $registerSonetEvent = true): Command;

    /**
     * @param \Darvin\Bitrix24Bundle\Model\CRM\ProductRow[]|\Darvin\Bitrix24Bundle\Model\CRM\ProductRow $rows Rows
     * @param string                                                                                    $id   Lead ID
     *
     * @return \Darvin\Bitrix24Bundle\Request\Command\Command
     */
    public function createSetProductRowsCommand($rows, string $id = '$result[crm.lead.add]'): Command;
}
