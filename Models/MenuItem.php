<?php

namespace RickWest\MenuBuilderBundle\Models;

/**
 * Class MenuItem
 * @package RickWest\MenuBuilderBundle\Models
 */
class MenuItem
{
    const TARGET_BLANK = '_blank';

    const TARGET_SELF = '_self';

    const TARGET_PARENT = '_parent';

    const TARGET_TOP = '_top';

    /** @var string */
    private $url;

    /** @var string */
    private $label;

    /** @var string */
    private $target = self::TARGET_BLANK;

    /** @var string */
    private $classes = '';

    /** @var MenuItem[] */
    private $children = [];

    /**
     * MenuItem constructor.
     * @param string $url
     * @param string $label
     * @param array $options
     */
    public function __construct(string $url, string $label, $options = [])
    {
        $this->label = $label;
        $this->url = $url;
        $this->buildOptions($options);
    }

    /**
     * @param $options
     */
    public function buildOptions($options)
    {
        if (array_key_exists('target', $options)) {
            $this->target = $options['target'];
        }

        if (array_key_exists('classes', $options)) {
            $this->classes = $options['classes'];
        }

        if (array_key_exists('children', $options)) {
            $this->children = $options['children'];
        }
    }

    /**
     * @param MenuItem $child
     * @return $this
     */
    public function addChild(MenuItem $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return MenuItem
     */
    public function setUrl(string $url): MenuItem
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return MenuItem
     */
    public function setLabel(string $label): MenuItem
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getTarget(): string
    {
        return $this->target;
    }

    /**
     * @param string $target
     * @return MenuItem
     */
    public function setTarget(string $target): MenuItem
    {
        $this->target = $target;
        return $this;
    }

    /**
     * @return string
     */
    public function getClasses(): string
    {
        return $this->classes;
    }

    /**
     * @param string $classes
     * @return MenuItem
     */
    public function setClasses(string $classes): MenuItem
    {
        $this->classes = $classes;
        return $this;
    }

    /**
     * @return MenuItem[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @param MenuItem[] $children
     * @return MenuItem
     */
    public function setChildren(array $children): MenuItem
    {
        $this->children = $children;
        return $this;
    }
}