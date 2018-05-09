<?php

/**
 * JarrMenuBuilderBundle
 */

namespace Jarr\MenuBuilderBundle\EventListener;

use Jarr\MenuBuilderBundle\Models\Menu;
use Jarr\MenuBuilderBundle\Models\MenuItem;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class MenuBuilderListener
{
    private $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        $menu = (new Menu('TestMenu'))
            ->addItem(new MenuItem('https://example.com/', 'Link 1'))
            ->addItem(new MenuItem('https://example.com/', 'Link 2'))
            ->addItem(new MenuItem('https://example.com/', 'Link 3'))
        ;

        $this->twig->addGlobal('menu', $menu);
    }
}