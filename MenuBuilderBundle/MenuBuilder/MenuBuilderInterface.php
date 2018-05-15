<?php

/**
 * JarrMenuBuilderBundle
 */

namespace Jarr\MenuBuilderBundle\MenuBuilder;

use Jarr\MenuBuilderBundle\Models\Menu;

/**
 * Interface MenuBuilderInterface
 * @package Jarr\MenuBuilderBundle\MenuBuilder
 */
interface MenuBuilderInterface
{
    /**
     * @return Menu
     */
    public function build();
}