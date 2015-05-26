<?php
namespace Gabrieljmj\TranslatorBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $translatorTree = $treeBuilder->root('yandex_translate');

        $translatorTree
            ->children()
                ->arrayNode('google_translate')
                    ->children()
                        ->scalarNode('api_key')->end()
                    ->end()
                ->end()
                ->arrayNode('yandex_translate')
                    ->children()
                        ->scalarNode('api_key')->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
} 