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
    private $commands;

    /**
     * @param bool                                     $halt     Halt
     * @param \Darvin\Bitrix24Bundle\Request\Command[] $commands Commands
     */
    public function __construct(bool $halt = false, array $commands = [])
    {
        $this->halt = $halt;

        $this->setCommands($commands);
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
     * @param \Darvin\Bitrix24Bundle\Request\Command[] $commands commands
     *
     * @return Request
     */
    public function setCommands(array $commands): Request
    {
        $cmd = [];

        foreach ($commands as $command) {
            $cmd[$command->getName()] = $command;
        }

        $this->commands = $cmd;

        return $this;
    }

    /**
     * @param \Darvin\Bitrix24Bundle\Request\Command $command Command
     *
     * @return Request
     */
    public function addCommand(Command $command): Request
    {
        $this->commands[$command->getName()] = $command;

        return $this;
    }

    /**
     * @param string $name Command name
     *
     * @return Request
     */
    public function removeCommand(string $name): Request
    {
        unset($this->commands[$name]);

        return $this;
    }

    /**
     * @param string $name Command name
     *
     * @return bool
     */
    public function hasCommand(string $name): bool
    {
        return isset($this->commands[$name]);
    }
}
