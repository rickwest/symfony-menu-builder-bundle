<?php

namespace RickWest\MenuBuilderBundle\DependencyInjection\Compiler;

use RickWest\MenuBuilderBundle\MenuBuilderBundle;
use RickWest\MenuBuilderBundle\MenuBuilder\MenuBuilderFactoryInterface;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class MenuBuilderPass
 * @package RickWest\MenuBuilderBundle\DependencyInjection\Compiler
 */
class MenuBuilderPass implements CompilerPassInterface
{
    /**
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        // first check that the menu builder factory is defined
        if (! $container->has(MenuBuilderFactoryInterface::class)) {
            return;
        }

        $definition = $container->findDefinition(MenuBuilderFactoryInterface::class);

        // find all services with the menu builder tag
        $taggedServices = $container->findTaggedServiceIds(MenuBuilderBundle::MENU_BUILDER_TAG);

        foreach ($taggedServices as $id => $tags) {
            $definition->addMethodCall('add', [new Reference($id)]);
        }
    }
}