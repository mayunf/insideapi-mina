<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/2/22
 * Time: 14:23
 */

namespace Mayunfeng\InsideMina\Foundation\ServiceProviders;

use Mayunfeng\InsideMina\User\User;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class UserServiceProvider implements ServiceProviderInterface 
{

    public function register(Container $container)
    {
        $container['user'] = function ($container) {
            return new User($container['access_token']);
        };
    }
}