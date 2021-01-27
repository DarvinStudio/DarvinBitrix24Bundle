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

use Darvin\Bitrix24Bundle\Request\Command\Command;

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
     * @var \Darvin\Bitrix24Bundle\Request\Command\Command[]
     */
    private $commands;

    /**
     * @param bool                                                                                            $halt     Halt
     * @param \Darvin\Bitrix24Bundle\Request\Command\Command[]|\Darvin\Bitrix24Bundle\Request\Command\Command $commands Commands
     */
    public function __construct($commands = [], bool $halt = true)
    {
        $this->halt = $halt;

        if (!is_array($commands)) {
            $commands = [$commands];
        }

        $this->setCommands($commands);
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return [
            'halt' => (int)$this->halt,
            'cmd'  => array_map('strval', $this->commands),
        ];
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
     * @param \Darvin\Bitrix24Bundle\Request\Command\Command[] $commands commands
     *
     * @return Request
     */
    public function setCommands(array $commands): Request
    {
        $cmd = [];

        foreach ($commands as $command) {
            $cmd[$command->getMethod()] = $command;
        }

        $this->commands = $cmd;

        return $this;
    }

    /**
     * @param \Darvin\Bitrix24Bundle\Request\Command\Command $command Command
     *
     * @return Request
     */
    public function addCommand(Command $command): Request
    {
        $this->commands[$command->getMethod()] = $command;

        return $this;
    }

    /**
     * @param string $method Command method
     *
     * @return Request
     */
    public function removeCommand(string $method): Request
    {
        unset($this->commands[$method]);

        return $this;
    }

    /**
     * @param string $method Command method
     *
     * @return \Darvin\Bitrix24Bundle\Request\Command\Command
     * @throws \InvalidArgumentException
     */
    public function getCommand(string $method): Command
    {
        if (!isset($this->commands[$method])) {
            throw new \InvalidArgumentException(sprintf('Request does not contain command "%s".', $method));
        }

        return $this->commands[$method];
    }

    /**
     * @param string $method Command method
     *
     * @return bool
     */
    public function hasCommand(string $method): bool
    {
        return isset($this->commands[$method]);
    }
}
