<?php

/**
 * JarrMenuBuilderBundle
 */

namespace Jarr\MenuBuilderBundle\DependencyInjection\Compiler;

use Jarr\MenuBuilderBundle\JarrMenuBuilderBundle;
use Jarr\MenuBuilderBundle\MenuBuilder\MenuBuilderInterface;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class MenuBuilderPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        // always first check if the primary service is defined
        if (! $container->has(MenuBuilderInterface::class)) {
            return;
        }

        $definition = $container->findDefinition(MenuBuilderInterface::class);

        // find all service IDs with the menu builder tag
        $taggedServices = $container->findTaggedServiceIds(JarrMenuBuilderBundle::MENU_BUILDER_TAG);

        foreach ($taggedServices as $id => $tags) {
            // add the transport service to the ChainTransport service
            $definition->addMethodCall('build');
        }
    }
}