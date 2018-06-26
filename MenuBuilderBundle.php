<?php

namespace RickWest\MenuBuilderBundle;

use RickWest\MenuBuilderBundle\DependencyInjection\Compiler\MenuBuilderPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class MenuBuilderBundle
 * @package RickWest\MenuBuilderBundle
 */
class MenuBuilderBundle extends Bundle
{
    const MENU_BUILDER_TAG = 'menu_builder.menu';

    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new MenuBuilderPass());
    }
}
