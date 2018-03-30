<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/1/8
 * Time: 16:04
 */

namespace Mayunfeng\InsideMina\Enum;


class EPlatform
{
    /// <summary>
    /// 百度
    /// </summary>
    const Baidu = 0;
    /// <summary>
    /// 奇搜360
    /// </summary>
    const Qh360 = 1;
    /// <summary>
    /// 搜狗
    /// </summary>
    const Sogou = 2;
    /// <summary>
    /// 神马
    /// </summary>
    const Shenma = 3;

    public static function getPlatform($key = null)
    {
        $all = [
            0 => '百度',
            1 => '360',
            2 => '搜狗',
            3 => '神马',
        ];
        if (array_key_exists($key,$all)) {
            return $all[$key];
        }
        return $all;
    }
}