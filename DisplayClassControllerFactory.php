<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 24/11/2018
 * Time: 13:50
 */

namespace theNameSpace;

use Psr\Container\ContainerInterface as ContainerInterface;

class DisplayClassControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        $class = $container->get('ClassModel');
        return new DisplayClassController($renderer,$class);
    }
}