<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/1/12
 * Time: 16:31
 */

namespace Mayunfeng\InsideMina\Enum;


class EStatus
{
    /// <summary>
    /// 正常
    /// </summary>

    const normal = 1;
    /// <summary>
    /// 暂停
    /// </summary>
    const pause = 2;
    /// <summary>
    /// 删除
    /// </summary>
    const deleting = 3;

    public static function getStatus($key = null)
    {
        $all = [
            1 => '正常',
            2 => '暂停',
            3 => '删除',
        ];
        if (array_key_exists($key,$all)) {
            return $all[$key];
        }
        return $all;
    }
}