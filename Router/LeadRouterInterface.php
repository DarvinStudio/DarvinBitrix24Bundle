<?php declare(strict_types=1);
/**
 * @author    Igor Nikolaev <igor.sv.n@gmail.com>
 * @copyright Copyright (c) 2021, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Router;

/**
 * Lead router
 */
interface LeadRouterInterface
{
    /**
     * @param string $id Lead ID
     *
     * @return string
     */
    public function generateShowUrl(string $id): string;
}
