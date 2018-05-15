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
    private $menus = [];

    /**
     * @param MenuBuilderInterface $builder
     */
    public function add(MenuBuilderInterface $builder)
    {
        $this->menus[] = $builder->build();
    }

    /**
     * @param string $name
     * @return Menu
     */
    public function create($name)
    {
        return new Menu($name);
    }

    /**
     * @return Menu[]
     */
    public function menus()
    {
        return $this->menus;
    }
}