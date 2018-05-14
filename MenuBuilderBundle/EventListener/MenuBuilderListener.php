<?php

/**
 * JarrMenuBuilderBundle
 */

namespace Jarr\MenuBuilderBundle\EventListener;

use Jarr\MenuBuilderBundle\MenuBuilder\MenuBuilderFactoryInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

/**
 * Class MenuBuilderListener
 * @package Jarr\MenuBuilderBundle\EventListener
 */
class MenuBuilderListener
{
    /**
     * @var \Twig_Environment
     */
    private $twig;

    /**
     * @var MenuBuilderFactoryInterface
     */
    private $menuBuilderFactory;

    /**
     * MenuBuilderListener constructor.
     * @param \Twig_Environment $twig
     * @param MenuBuilderFactoryInterface $menuBuilderFactory
     */
    public function __construct(\Twig_Environment $twig, MenuBuilderFactoryInterface $menuBuilderFactory)
    {
        $this->twig = $twig;
        $this->menuBuilderFactory = $menuBuilderFactory;
    }

    /**
     * @param GetResponseEvent $event
     */
    public function onKernelRequest(GetResponseEvent $event)
    {
        foreach ($this->menuBuilderFactory->menus() as $menu) {
            $this->twig->addGlobal($menu->getName(), $menu);
        }
    }
}