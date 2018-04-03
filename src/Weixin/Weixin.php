<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/4/3
 * Time: 14:45
 */
namespace Mayunfeng\InsideMina\Weixin;

use Mayunfeng\InsideMina\Core\AbstractAPI;

class Weixin extends AbstractAPI
{
    const SET_TOKEN = 'v1/weixin/settoken'; // 设置token
    const SET_INFO = 'v1/weixin/setinfo'; // 设置info

    public function setToken($params = [])
    {
        return $this->parseJSON(static::POST,[self::SET_TOKEN,$params]);
    }


    public function setInfo($params = [])
    {
        return $this->parseJSON(static::POST,[self::SET_INFO,$params]);
    }
}