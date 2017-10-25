<?php
/**
 * Created by PhpStorm.
 * User: teteu
 * Date: 12/10/2017
 * Time: 21:46
 */

namespace SONFin\Plugins;


use SONFin\ServiceContainerInterface;

interface PluginInterface
{
    public function register(ServiceContainerInterface $container);

}
