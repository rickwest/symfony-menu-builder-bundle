<?php

namespace RickWest\MenuBuilderBundle\Models;

/**
 * Class MenuItem
 * @package RickWest\MenuBuilderBundle\Models
 */
class MenuItem
{
    /** @var string */
    private $url;

    /** @var string */
    private $label;

    /** @var string */
    private $target;

    /** @var string */
    private $classes;

    /** @var MenuItem[] */
    private $children;

    /**
     * MenuItem constructor.
     * @param string $url
     * @param string $label
     */
    public function __construct(string $url, string $label)
    {
        $this->url = $url;
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return MenuItem
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return MenuItem
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param string $target
     * @return MenuItem
     */
    public function setTarget(string $target)
    {
        $this->target = $target;
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
     * @return MenuItem
     */
    public function setClasses(string $classes)
    {
        $this->classes = $classes;
        return $this;
    }

    /**
     * @return MenuItem[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param MenuItem[] $children
     * @return MenuItem
     */
    public function setChildren(array $children)
    {
        $this->children = $children;
        return $this;
    }
}