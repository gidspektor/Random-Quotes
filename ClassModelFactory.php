<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 24/11/2018
 * Time: 13:36
 */

namespace theNameSpace;

use Psr\Container\ContainerInterface;

class ClassModelFactory
{
    public function __invoke(containerInterface $container)
    {
        $db = $container->get('dbConnection');
        return new ClassModel($db);
    }
}