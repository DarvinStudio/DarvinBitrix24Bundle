<?php declare(strict_types=1);
/**
 * @author    Igor Nikolaev <igor.sv.n@gmail.com>
 * @copyright Copyright (c) 2020, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Request;

/**
 * Request
 */
class Request
{
    /**
     * Определяет прерывать ли последовательность запросов в случае ошибки.
     *
     * @var bool
     */
    private $halt;

    /**
     * Массив запросов стандартного вида (следует помнить про квотирование данных запросов; получается, что данные для
     * подзапросов должны пройти двойное квотирование).
     *
     * @var \Darvin\Bitrix24Bundle\Request\Command[]
     */
    private $cmd;

    /**
     * @param bool                                     $halt Halt
     * @param \Darvin\Bitrix24Bundle\Request\Command[] $cmd  Commands
     */
    public function __construct(bool $halt = false, array $cmd = [])
    {
        $this->halt = $halt;
        $this->cmd = $cmd;
    }

    /**
     * @param bool $halt halt
     *
     * @return Request
     */
    public function setHalt(bool $halt): Request
    {
        $this->halt = $halt;

        return $this;
    }

    /**
     * @param \Darvin\Bitrix24Bundle\Request\Command[] $cmd cmd
     *
     * @return Request
     */
    public function setCmd(array $cmd): Request
    {
        $this->cmd = $cmd;

        return $this;
    }
}
