<?php

/**
 * JarrMenuBuilderBundle
 */

namespace Jarr\MenuBuilderBundle\DependencyInjection\Compiler;

use Jarr\MenuBuilderBundle\JarrMenuBuilderBundle;
use Jarr\MenuBuilderBundle\MenuBuilder\MenuBuilderFactoryInterface;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class MenuBuilderPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        // first check that the menu builder factory is defined
        if (! $container->has(MenuBuilderFactoryInterface::class)) {
            return;
        }

        $definition = $container->findDefinition(MenuBuilderFactoryInterface::class);

        // find all services with the menu builder tag
        $taggedServices = $container->findTaggedServiceIds(JarrMenuBuilderBundle::MENU_BUILDER_TAG);

        foreach ($taggedServices as $id => $tags) {
            $definition->addMethodCall('add', [new Reference($id)]);
        }
    }
}