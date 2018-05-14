<?php

/**
 * JarrMenuBuilderBundle
 */

namespace Jarr\MenuBuilderBundle;

use Jarr\MenuBuilderBundle\DependencyInjection\Compiler\MenuBuilderPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class JarrMenuBuilderBundle extends Bundle
{
    const MENU_BUILDER_TAG = 'jarr_menu_builder.menu';

    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new MenuBuilderPass());
    }
}
