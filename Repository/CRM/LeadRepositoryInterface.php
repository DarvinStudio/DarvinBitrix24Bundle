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

use Darvin\Bitrix24Bundle\Model\CRM\Lead;

/**
 * Lead repository
 *
 * @deprecated
 */
interface LeadRepositoryInterface
{
    /**
     * @param \Darvin\Bitrix24Bundle\Model\CRM\Lead $lead               Lead
     * @param bool                                  $registerSonetEvent Произвести регистрацию события добавления лида в живой ленте.
     *
     * @return mixed
     * @throws \Darvin\Bitrix24Bundle\Exception\Bitrix24Exception
     */
    public function add(Lead $lead, bool $registerSonetEvent = true);
}
