<?php

/**
 * JarrMenuBuilderBundle
 */

namespace Jarr\MenuBuilderBundle\MenuBuilder;

use Jarr\MenuBuilderBundle\Models\Menu;

class MenuBuilderFactory
{
    public function create($name)
    {
        return new Menu($name);
    }
}