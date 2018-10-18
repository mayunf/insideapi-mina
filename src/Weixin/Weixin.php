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
    const GET_BD_ACCOUNT_INFO = '/v1/weixin/baiduGetAccountInfo'; // 获取百度账户信息
    const GET_SG_ACCOUNT_INFO = '/v1/weixin/sogouGetAccountInfo'; // 获取搜狗账户信息
    const GET_SM_ACCOUNT_INFO = '/v1/weixin/wolongGetAccountInfo'; // 获取神马账户信息
    const GET_DJ_ACCOUNT_INFO = '/v1/weixin/dianjingGetAccountInfo'; // 获取点睛账户信息

    public function setToken($params = [])
    {
        return $this->parseJSON(static::POST,[self::SET_TOKEN,$params]);
    }


    public function setInfo($params = [])
    {
        return $this->parseJSON(static::POST,[self::SET_INFO,$params]);
    }

    /**
    {
    "uId":19525,            //用户Id
    "aId":24210642            //账户Id
    }
     * @param array $params
     * @return \Mayunfeng\Supports\Collection
     *
    {
        "Header": {
            "Timestamp": 1530613320777,
            "Oprtime": 1778,
            "Status": 0,
            "Desc": "成功"
        },
        "Body": {
            "aId": 24210642,    //账户ID
            "un": 九维网络,        //账户名
            "bl": 626.52,        //账户余额
            "bg": 150,            //账户预算
            "st": 1,            //账户状态(0 未知,1 正常, 2 警告, 3 异常)
            "std": "正常"        //账户状态详细描述
        }
    }
     * @throws \Mayunfeng\InsideMina\Core\Exception
     * @throws \Mayunfeng\InsideMina\Core\Exceptions\HttpException
     */
    public function getBdAccInfo($params = [])
    {
        return $this->parseJSON(static::POST,[self::GET_BD_ACCOUNT_INFO,$params]);
    }

    public function getSgAccInfo($params = [])
    {
        return $this->parseJSON(static::POST,[self::GET_SG_ACCOUNT_INFO,$params]);
    }

    public function getSmAccInfo($params = [])
    {
        return $this->parseJSON(static::POST,[self::GET_SM_ACCOUNT_INFO,$params]);
    }

    public function getDjAccInfo($params = [])
    {
        return $this->parseJSON(static::POST,[self::GET_DJ_ACCOUNT_INFO,$params]);
    }
}
