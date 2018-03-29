<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2017/11/27
 * Time: 20:37
 */

namespace Mayunfeng\InsideMina\Core;


class ErrCode
{

    public static function getErrMsg($code)
    {
        switch ($code){
            case 1000:
                $errMsg = '系统错误';
                break;
            case 1001:
                $errMsg = '服务端错误';
                break;
            case 1002:
                $errMsg = 'Token 为空';
                break;
            case 1003:
                $errMsg = 'Token 过期';
                break;
            case 1004:
                $errMsg = 'Token 不可用';
                break;
            case 1005:
                $errMsg = 'Accesstoken 错误';
                break;
            case 1006:
                $errMsg = 'Accesstoken 为空';
                break;
            case 1007:
                $errMsg = 'Accesstoken 过期';
                break;
            case 1008:
                $errMsg = 'Timestamp 为空';
                break;
            case 1010:
                $errMsg = '数据为空';
                break;
            case 1011:
                $errMsg = '数据不合法';
                break;
            case 10001:
                $errMsg = '系统登录错误';
                break;
            case 10002:
                $errMsg = '登录名不能为空';
                break;
            case 10003:
                $errMsg = '登录密码不能为空';
                break;
            case 10004:
                $errMsg = '获取用户信息失败';
                break;
            case 10005:
                $errMsg = '手机号码未验证';
                break;
            case 10006:
                $errMsg = '添加账户错误';
                break;
            case 10007:
                $errMsg = '帐户数量达到上限';
                break;
            case 10008:
                $errMsg = '编辑账户失败';
                break;
            case 10009:
                $errMsg = '删除账户失败';
                break;
            case 10010:
                $errMsg = '注册失败';
                break;
            case 10011:
                $errMsg = '用户已存在';
                break;
            case 10012:
                $errMsg = '密码不能为空';
                break;
            case 10013:
                $errMsg = '密码错误';
                break;
            case 10014:
                $errMsg = '编辑失败';
                break;
            case 10015:
                $errMsg = '发送失败';
                break;
            case 10016:
                $errMsg = '发送太频繁';
                break;
            case 10101:
                $errMsg = '账户不存在';
                break;
            case 10102:
                $errMsg = '刷新Token 失败';
                break;
            case 10103:
                $errMsg = '刷新Token 不存在';
                break;
            case 10201:
                $errMsg = '产品权限已经存在';
                break;
            case 10202:
                $errMsg = '产品权限添加失败';
                break;
            case 10210:
                $errMsg = '添加用户权限失败，此用户权限开通过于频繁';
                break;
            case 40002:
                $errMsg = '竞价返回值是空';
                break;
            case 40003:
                $errMsg = 'Text 转化  ResModel=>MyData 失败';
                break;
            case 40004:
                $errMsg = '获取的 Header 是空的';
                break;
            case 40005:
                $errMsg = '获取的Body 是空的';
                break;
            default:
                $errMsg = '未知错误';

        }
        return $errMsg;
    } 
}