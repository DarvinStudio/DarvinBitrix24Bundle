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

use GuzzleHttp\RequestOptions;

/**
 * Client
 */
class Client implements ClientInterface
{
    /**
     * @var \GuzzleHttp\ClientInterface
     */
    private $httpClient;

    /**
     * @param \GuzzleHttp\ClientInterface $httpClient HTTP client
     */
    public function __construct(\GuzzleHttp\ClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * {@inheritDoc}
     */
    public function call($method, array $fields = [], array $params = [])
    {
        $response = $this->httpClient->request('post', $method, [
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::FORM_PARAMS => [
                'fields' => $fields,
                'params' => $params,
            ],
        ]);

        $content = $response->getBody()->getContents();
    }
}
