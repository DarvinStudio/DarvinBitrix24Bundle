<?php
/**
 * @author    Igor Nikolaev <igor.sv.n@gmail.com>
 * @copyright Copyright (c) 2019, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Model;

use Darvin\Utils\Strings\StringsUtil;

/**
 * Model abstract implementation
 */
abstract class AbstractModel
{
    /**
     * @return array
     */
    public function getData()
    {
        $data = [];

        foreach (get_object_vars($this) as $name => $value) {
            if (null === $value || (is_array($value) && empty($value))) {
                continue;
            }
            if (is_bool($value)) {
                $value = $value ? 'Y' : 'N';
            }

            preg_match_all('/[a-z]+|\d+/i', StringsUtil::toUnderscore($name), $matches);

            $name = implode('_', $matches[0]);
            $name = strtoupper($name);

            $data[$name] = $value;
        }

        return $data;
    }
}
