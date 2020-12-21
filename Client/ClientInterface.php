<?php declare(strict_types=1);
/**
 * @author    Igor Nikolaev <igor.sv.n@gmail.com>
 * @copyright Copyright (c) 2019, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Client;

use Darvin\Bitrix24Bundle\Request\Request;

/**
 * Client
 */
interface ClientInterface
{
    /**
     * @param \Darvin\Bitrix24Bundle\Request\Request $request Request
     *
     * @return mixed
     * @throws \Darvin\Bitrix24Bundle\Exception\Bitrix24Exception
     */
    public function send(Request $request);

    /**
     * @param string $method Method
     * @param array  $fields Fields
     * @param array  $params Parameters
     *
     * @return mixed
     * @throws \Darvin\Bitrix24Bundle\Exception\Bitrix24Exception
     */
    public function call(string $method, array $fields = [], array $params = []);
}
