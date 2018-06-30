<?php

namespace RickWest\MenuBuilderBundle\MenuBuilder;

use RickWest\MenuBuilderBundle\Models\Menu;
use RickWest\MenuBuilderBundle\Models\MenuItem;

/**
 * Interface MenuBuilderFactoryInterface
 * @package RickWest\MenuBuilderBundle\MenuBuilder
 */
interface MenuBuilderFactoryInterface
{

    /**
     * @param MenuBuilderInterface $builder
     */
    public function add(MenuBuilderInterface $builder);

    /**
     * @param string $name
     * @return Menu
     */
    public function create(string $name);

    /**
     * @param string $url
     * @param string $label
     * @param array $options
     * @return MenuItem
     */
    public function item(string $url, string $label, array $options);

    /**
     * @return Menu[]
     */
    public function menus();
}