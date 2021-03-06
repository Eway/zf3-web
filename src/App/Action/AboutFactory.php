<?php

namespace App\Action;

use Psr\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class AboutFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config   = $container->get('config');
        $template = $container->get(TemplateRendererInterface::class);

        return new AboutAction($config, $template);
    }
}
