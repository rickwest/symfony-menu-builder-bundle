<?php

/**
 * JarrMenuBuilderBundle
 */

namespace Jarr\MenuBuilderBundle\MenuBuilder;

use Jarr\MenuBuilderBundle\Models\Menu;
use Jarr\MenuBuilderBundle\Models\MenuItem;


/**
 * Interface MenuBuilderFactoryInterface
 * @package Jarr\MenuBuilderBundle\MenuBuilder
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
     * @return MenuItem
     */
    public function item(string $url, string $label);

    /**
     * @return Menu[]
     */
    public function menus();
}