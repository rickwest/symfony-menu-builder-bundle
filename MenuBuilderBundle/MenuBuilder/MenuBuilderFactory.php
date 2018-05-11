<?php

/**
 * JarrMenuBuilderBundle
 */

namespace Jarr\MenuBuilderBundle\MenuBuilder;

use Jarr\MenuBuilderBundle\Models\Menu;

/**
 * Class MenuBuilderFactory
 * @package Jarr\MenuBuilderBundle\MenuBuilder
 */
final class MenuBuilderFactory implements MenuBuilderFactoryInterface
{
    /** @var Menu[] */
    private $menus;

    /**
     * @param string $name
     * @return Menu
     */
    public function create($name)
    {
        $menu = new Menu($name);

        $this->menus[] = $menu;

        return $menu;
    }

    /**
     * @return Menu[]
     */
    public function getMenus()
    {
        return $this->menus;
    }
}