<?php declare(strict_types=1);
/**
 * @author    Igor Nikolaev <igor.sv.n@gmail.com>
 * @copyright Copyright (c) 2019, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Value;

use Darvin\Bitrix24Bundle\Model\ModelInterface;

/**
 * Value formatter
 */
class ValueFormatter
{
    /**
     * @param mixed $value Value
     *
     * @return mixed
     */
    public static function format($value)
    {
        if ($value instanceof ModelInterface) {
            return $value->getFields();
        }
        if (is_bool($value)) {
            return $value ? 'Y' : 'N';
        }
        if (is_array($value)) {
            $prepared = [];

            foreach ($value as $key => $item) {
                $prepared[$key] = self::format($item);
            }

            return $prepared;
        }

        return $value;
    }
}
