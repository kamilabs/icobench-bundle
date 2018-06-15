<?php

namespace Kami\IcoBenchBundle\DependencyInjection;

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
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('kami_icobench');

        $rootNode->children()
            ->scalarNode('private_key')->isRequired()->end()
            ->scalarNode('public_key')->isRequired()->end()
            ->arrayNode('guzzle_options')
                ->children()
                    ->scalarNode('proxy')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
