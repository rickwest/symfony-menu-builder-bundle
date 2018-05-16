<?php

/**
 * JarrMenuBuilderBundle
 */

namespace Jarr\MenuBuilderBundle\MenuBuilder;

use Jarr\MenuBuilderBundle\Models\Menu;
use Jarr\MenuBuilderBundle\Models\MenuItem;

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
    public function create(string $name)
    {
        return new Menu($name);
    }


    /**
     * @param string $url
     * @param string $label
     * @return MenuItem
     */
    public function item(string $url, string $label)
    {
        return new MenuItem($url, $label);
    }

    /**
     * @return Menu[]
     */
    public function menus()
    {
        return $this->menus;
    }
}