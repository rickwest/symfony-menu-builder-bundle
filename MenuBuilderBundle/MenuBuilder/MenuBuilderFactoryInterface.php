<?php
/**
 * Created by PhpStorm.
 * User: rick
 * Date: 11/05/2018
 * Time: 18:13
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
    public function getMenus();
}