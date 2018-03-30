<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/1/8
 * Time: 16:06
 */

namespace Mayunfeng\InsideMina\Enum;


class EUserType
{
    /// <summary>
    /// 免费用户 尚未购买和申请试用
    /// </summary>
    const Free = 0;

    /// <summary>
    /// 试用的用户 已提交试用 但不确定是否过期
    /// </summary>
    const Trial = 1;

    /// <summary>
    /// 付费的用户, 已付费, 但不确定是否过期
    /// </summary>
    const Pay = 2;


    public static function getUserType($key = null)
    {
        $all = [
            0 => '免费用户',
            1 => '试用用户',
            2 => '付费用户',
        ];
        if (array_key_exists($key,$all)) {
            return $all[$key];
        }
        return $all;
    }

}