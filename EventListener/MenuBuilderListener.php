<?php

namespace RickWest\MenuBuilderBundle\EventListener;

use RickWest\MenuBuilderBundle\MenuBuilder\MenuBuilderFactoryInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

/**
 * Class MenuBuilderListener
 * @package RickWest\MenuBuilderBundle\EventListener
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
     * @param FilterResponseEvent $event
     */
    public function onKernelResponse(FilterResponseEvent $event)
    {
        foreach ($this->menuBuilderFactory->menus() as $menu) {
            $this->twig->addGlobal($menu->getName(), $menu);
        }
    }
}