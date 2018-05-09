<?php

/**
 * JarrMenuBuilderBundle
 */

namespace Jarr\MenuBuilderBundle\Models;


class Menu
{
    /** @var string */
    private $name;

    /** @var MenuItem[] */
    private $items;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return MenuItem[]
     */
    public function getItems()
    {
        return $this->items;
    }


    public function addItem(MenuItem $item)
    {
        $this->items[] = $item;

        return $this;
    }
}