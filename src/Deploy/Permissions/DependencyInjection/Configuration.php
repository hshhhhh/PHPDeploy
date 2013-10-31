<?php

namespace Deploy\Permissions\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('deploy_permissions');

        $rootNode
            ->children()
                ->arrayNode('rwx')->prototype('scalar')->end()->end()
            ->end();

        return $treeBuilder;
    }
}