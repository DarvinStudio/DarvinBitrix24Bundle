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

use Darvin\Bitrix24Bundle\Exception\Bitrix24Exception;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;

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
     * @var \Psr\Log\LoggerInterface|null
     */
    private $logger;

    /**
     * @param \GuzzleHttp\ClientInterface $httpClient HTTP client
     */
    public function __construct(\GuzzleHttp\ClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @param \Psr\Log\LoggerInterface|null $logger Logger
     */
    public function setLogger(LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }

    /**
     * {@inheritDoc}
     */
    public function call($method, array $fields = [], array $params = [])
    {
        try {
            $response = $this->httpClient->request('post', $method, [
                RequestOptions::FORM_PARAMS => [
                    'fields' => $fields,
                    'params' => $params,
                ],
            ]);
        } catch (GuzzleException $ex) {
            if ($ex instanceof RequestException && null !== $ex->getResponse()) {
                return $this->handleResponse($ex->getResponse());
            }

            throw $this->handleError($ex->getMessage(), null, $ex);
        }

        return $this->handleResponse($response);
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response Response
     *
     * @return mixed
     * @throws \Darvin\Bitrix24Bundle\Exception\Bitrix24Exception
     */
    private function handleResponse(ResponseInterface $response)
    {
        $json = $response->getBody()->getContents();

        $data = json_decode($json, true);

        if (null === $data) {
            throw $this->handleError(sprintf('Unable to decode response "%s" as JSON', $json), json_last_error_msg());
        }
        if (isset($data['error']) || isset($data['error_description'])) {
            throw $this->handleError(
                isset($data['error']) ? $data['error'] : null,
                isset($data['error_description']) ? $data['error_description'] : null
            );
        }

        return $data;
    }

    /**
     * @param string|null     $error       Error
     * @param string|null     $description Error description
     * @param \Exception|null $previous    Previous exception
     *
     * @return \Darvin\Bitrix24Bundle\Exception\Bitrix24Exception
     */
    private function handleError($error = null, $description = null, \Exception $previous = null)
    {
        $error       = (string)$error;
        $description = (string)$description;

        if ('' !== $error && '' !== $description) {
            $message = sprintf('%s: %s.', $error, $description);
        } else {
            $message = '' !== $error ? $error : $description;
        }
        if (null !== $this->logger) {
            $this->logger->error(implode(' ', [__METHOD__, $message]));
        }

        return new Bitrix24Exception($message, 0, $previous);
    }
}
