<?php

namespace RickWest\MenuBuilderBundle\MenuBuilder;

use RickWest\MenuBuilderBundle\Models\Menu;

/**
 * Interface MenuBuilderInterface
 * @package RickWest\MenuBuilderBundle\MenuBuilder
 */
interface MenuBuilderInterface
{
    /**
     * @return Menu
     */
    public function build();
}