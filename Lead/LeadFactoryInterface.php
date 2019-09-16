<?php
/**
 * @author    Alexander Volodin <mr-stanlik@yandex.ru>
 * @copyright Copyright (c) 2019, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Lead;

/**
 * Bitrix24 lead factory
 */
interface LeadFactoryInterface
{
    /**
     * @param string|null $title Lead title
     *
     * @return \Darvin\Bitrix24Bundle\Model\CRM\Lead
     * @throws \InvalidArgumentException
     */
    public function createLead($title);
}
