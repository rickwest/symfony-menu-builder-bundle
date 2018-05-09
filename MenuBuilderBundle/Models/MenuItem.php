<?php

/**
 * JarrMenuBuilderBundle
 */

namespace Jarr\MenuBuilderBundle\Models;


class MenuItem
{
    /** @var string */
    private $url;

    /** @var string */
    private $label;

    /** @var string */
    private $target;

    /** @var string */
    private $class;

    /** @var MenuItem[] */
    private $children;

    public function __construct($url, $label)
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
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }


}