<?php
/**
 * @author    Igor Nikolaev <igor.sv.n@gmail.com>
 * @copyright Copyright (c) 2019, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Client;

/**
 * Client
 */
interface Bitrix24ClientInterface
{
    /**
     * @param string $method Method
     * @param array  $fields Fields
     * @param array  $params Parameters
     */
    public function call($method, array $fields = [], array $params = []);

    /**
     * @param string $method Method
     * @param array  $fields Fields
     * @param array  $params Parameters
     *
     * @throws \RuntimeException
     */
    public function mustCall($method, array $fields = [], array $params = []);
}
