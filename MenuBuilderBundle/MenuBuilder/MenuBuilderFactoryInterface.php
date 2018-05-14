<?php

/**
 * JarrMenuBuilderBundle
 */

namespace Jarr\MenuBuilderBundle\MenuBuilder;

use Jarr\MenuBuilderBundle\Models\Menu;


/**
 * Interface MenuBuilderFactoryInterface
 * @package Jarr\MenuBuilderBundle\MenuBuilder
 */
interface MenuBuilderFactoryInterface
{
    /**
     * @param string $name
     * @return Menu
     */
    public function create($name);

    /**
     * @return Menu[]
     */
    public function menus();
}