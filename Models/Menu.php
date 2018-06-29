<?php

namespace RickWest\MenuBuilderBundle\Models;

/**
 * Class Menu
 * @package RickWest\MenuBuilderBundle\Models
 */
class Menu
{
    /** @var string */
    private $name;

    /** @var MenuItem[] */
    private $items;

    /** @var string */
    public $classes;

    /**
     * Menu constructor.
     * @param string $name
     */
    public function __construct(string $name)
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
     * @param string $name
     * @return Menu
     */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * @param string $classes
     * @return Menu
     */
    public function setClasses(string $classes)
    {
        $this->classes = $classes;
        return $this;
    }

    /**
     * @return MenuItem[]
     */
    public function getItems()
    {
        return $this->items;
    }


    /**
     * @param MenuItem $item
     * @return $this
     */
    public function addItem(MenuItem $item)
    {
        $this->items[] = $item;
        return $this;
    }
}