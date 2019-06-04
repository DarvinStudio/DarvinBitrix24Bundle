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

use Darvin\Bitrix24Bundle\Value\ValueFormatter;
use Darvin\Utils\Strings\StringsUtil;

/**
 * Model abstract implementation
 */
abstract class AbstractModel implements ModelInterface
{
    /**
     * {@inheritDoc}
     */
    public function getFields()
    {
        $data = [];

        foreach (get_object_vars($this) as $name => $value) {
            if (null === $value || '' === $value || (is_array($value) && empty($value))) {
                continue;
            }

            $data[$this->formatName($name)] = ValueFormatter::format($value);
        }

        return $data;
    }

    /**
     * @param string $name Name
     *
     * @return string
     */
    private function formatName($name)
    {
        preg_match_all('/[a-z]+|\d+/i', StringsUtil::toUnderscore($name), $matches);

        return strtoupper(implode('_', $matches[0]));
    }
}
