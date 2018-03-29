<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/2/22
 * Time: 14:25
 */

namespace Mayunfeng\InsideMina\User;

use Mayunfeng\InsideMina\Core\AbstractAPI;
use Mayunfeng\Supports\Collection;

class User extends AbstractAPI
{
    const GET_INFO = '/v1/user/getinfo';


    /**
     * @param array $params
     * @return Collection
     * @throws \Mayunfeng\InsideMina\Core\Exception
     * @throws \Mayunfeng\InsideMina\Core\Exceptions\HttpException
     */
    public function getInfo($params = [])
    {
        return $this->parseJSON(static::POST,[self::GET_INFO,$params]);
    }
}