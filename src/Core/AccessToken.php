<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/2/22
 * Time: 14:39
 */

namespace Mayunfeng\InsideMina\Core;

class AccessToken
{
    protected $token; //访问token

    protected $userid; // 用户ID

    const HOST = 'http://inside.xiaolutg.com/';

    public function __construct($token,$userid)
    {
        $this->token = $token;
        $this->userid = $userid;

    }

    public function getToken()
    {
        return $this->token;
    }

    public function getUserid()
    {
        return $this->userid;
    }


}