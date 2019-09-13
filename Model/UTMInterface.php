<?php
/**
 * @author    Alexander Volodin <mr-stanlik@yandex.ru>
 * @copyright Copyright (c) 2019, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Model;

/**
 * Lead
 */
interface UTMInterface
{
    /**
     * @return array
     */
    public static function getRelations();

    /**
     * UTMInterface constructor.
     *
     * @param array $parameters
     */
    public function __construct(array $parameters);
}
