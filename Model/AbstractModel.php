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
abstract class AbstractModel implements ModelInterface
{
    /**
     * {@inheritDoc}
     */
    public function getFields()
    {
        $data = [];

        foreach (get_object_vars($this) as $name => $value) {
            if (null === $value || (is_array($value) && empty($value))) {
                continue;
            }

            $data[$this->prepareName($name)] = $this->prepareValue($value);
        }

        return $data;
    }

    /**
     * @param string $name Name
     *
     * @return string
     */
    private function prepareName($name)
    {
        preg_match_all('/[a-z]+|\d+/i', StringsUtil::toUnderscore($name), $matches);

        return strtoupper(implode('_', $matches[0]));
    }

    /**
     * @param mixed $value Value
     *
     * @return mixed
     */
    private function prepareValue($value)
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
                $prepared[$key] = $this->prepareValue($item);
            }

            return $prepared;
        }

        return $value;
    }
}
