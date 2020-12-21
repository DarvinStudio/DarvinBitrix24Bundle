<?php declare(strict_types=1);
/**
 * @author    Igor Nikolaev <igor.sv.n@gmail.com>
 * @copyright Copyright (c) 2020, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Request\Command;

/**
 * Command
 */
class Command
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $method;

    /**
     * @var array
     */
    private $params;

    /**
     * @param string      $method Method
     * @param array       $params Parameters
     * @param string|null $name   Name
     */
    public function __construct(string $method, array $params = [], ?string $name = null)
    {
        if (null === $name) {
            $name = $method;
        }

        $this->name = $name;
        $this->method = $method;
        $this->params = $params;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $parts = [$this->method];

        if (!empty($this->params)) {
            $parts = array_merge($parts, ['?', http_build_query($this->params)]);
        }

        return implode('', $parts);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name name
     *
     * @return Command
     */
    public function setName(string $name): Command
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $method method
     *
     * @return Command
     */
    public function setMethod(string $method): Command
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @param array $params params
     *
     * @return Command
     */
    public function setParams(array $params): Command
    {
        $this->params = $params;

        return $this;
    }
}
