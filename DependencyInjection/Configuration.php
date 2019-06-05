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

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $builder = new TreeBuilder('darvin_bitrix24');

        $root = $builder->getRootNode();
        $root
            ->children()
                ->arrayNode('account')->canBeEnabled()
                    ->children()
                        ->scalarNode('domain')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('user_id')->isRequired()->end()
                        ->scalarNode('secret')->isRequired()->cannotBeEmpty()->end()
                    ->end()
                ->end()
                ->arrayNode('http_client')->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('timeout')->defaultValue(3);

        return $builder;
    }
}
