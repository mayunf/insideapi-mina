<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/1/8
 * Time: 16:04
 */

namespace Mayunfeng\InsideMina\Enum;


class EPerType
{
    /// <summary>
    /// 全部权限
    /// </summary>
    const All = -1;
    /// <summary>
    /// 自定义权限
    /// </summary>
    const Custom = 0;
    /// <summary>
    /// 免费版权限
    /// </summary>
    const Free = 1;
    /// <summary>
    /// 系统权限
    /// </summary>
    const System = 2;

    public static function getPerType($key = null)
    {
        $all = [
            -1 => '全部权限',
            0 => '自定义权限',
            1 => '免费版权限',
            2 => '系统权限',
        ];
        if (array_key_exists($key,$all)) {
            return $all[$key];
        }
        return $all;
    }
}