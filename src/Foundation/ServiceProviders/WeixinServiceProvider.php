<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/2/22
 * Time: 14:23
 */

namespace Mayunfeng\InsideMina\Foundation\ServiceProviders;

use Mayunfeng\InsideMina\User\User;
use Mayunfeng\InsideMina\Weixin\Weixin;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class WeixinServiceProvider implements ServiceProviderInterface
{

    public function register(Container $container)
    {
        $container['weixin'] = function ($container) {
            return new Weixin($container['access_token']);
        };
    }
}