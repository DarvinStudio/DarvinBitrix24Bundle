<?php declare(strict_types=1);
/**
 * @author    Darvin Studio <info@darvin-studio.ru>
 * @copyright Copyright (c) 2019, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\DependencyInjection;

use Darvin\Utils\DependencyInjection\ConfigLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class DarvinBitrix24Extension extends Extension implements PrependExtensionInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $config = $this->processConfiguration(new Configuration(), $configs);

        if (!$config['account']['enabled']) {
            return;
        }

        $bundles = $container->getParameter('kernel.bundles');

        if (!isset($bundles['EightPointsGuzzleBundle'])) {
            throw new \RuntimeException('EightPointsGuzzleBundle is not enabled.');
        }

        $container->setParameter('darvin_bitrix24.account.domain', $config['account']['domain']);

        (new ConfigLoader($container, __DIR__.'/../Resources/config/services'))->load([
            'client',
            'lead',
            'repository',
            'request',
            'router',
            'utm',
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function prepend(ContainerBuilder $container): void
    {
        $config = $this->processConfiguration(
            new Configuration(),
            $container->resolveEnvPlaceholders($container->getParameterBag()->resolveValue($container->getExtensionConfig($this->getAlias())))
        );

        if (!$config['account']['enabled']) {
            return;
        }

        $container->prependExtensionConfig('eight_points_guzzle', [
            'clients' => [
                $this->getAlias() => [
                    'base_url' => sprintf('https://%s/rest/%s/%s/', $config['account']['domain'], $config['account']['user_id'], $config['account']['secret']),
                    'options'  => [
                        'connect_timeout' => $config['http_client']['timeout'],
                        'timeout'         => $config['http_client']['timeout'],
                    ],
                ],
            ],
        ]);
    }
}
