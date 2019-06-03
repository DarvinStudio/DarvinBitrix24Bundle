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

/**
 * Contact
 */
class Contact extends AbstractModel
{
    /**
     * @var string
     */
    protected $value;

    /**
     * @var string
     */
    protected $valueType;

    /**
     * Contact constructor.
     */
    public function __construct()
    {
        $this->valueType = 'WORK';
    }

    /**
     * @param string $value value
     *
     * @return Contact
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param string $valueType valueType
     *
     * @return Contact
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;

        return $this;
    }
}
