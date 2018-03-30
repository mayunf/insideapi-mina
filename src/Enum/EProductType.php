<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/1/8
 * Time: 15:57
 */

namespace Mayunfeng\InsideMina\Enum;


class EProductType
{
    const None = 0;
    const PZ_JingZhun = 100; /// 品众精准大师
    const PZ_Dianjing = 101;/// 品众点睛点睛
    const PZ_Dianjing_Enterprise = 102; /// 品众点睛企业版
    const PZ_Shenma = 103;/// 品众卧龙
    const PZ_Shenma_Bid = 104; /// 品众卧龙调价助手
    const PZ_Shenma_Idea = 105; /// 品众卧龙创意
    const PZ_Shenma_Report = 106; /// 品众卧龙报告
    const PZ_Baidu_Kuaicha = 107; /// 品众百度快查

    const XL_Platform = 110; /// 小鹿推广平台
    const XL_Bid_Baidu = 111; /// 小鹿竞价百度版
    const XL_Bid_Sogou = 112; /// 小鹿竞价搜狗版
    const XL_Bid_Dianjing = 113;/// 小鹿竞价点睛版
    const XL_Bid_Shenma = 114; /// 小鹿竞价卧龙版
    const XL_Edit_Baidu = 115; /// 小鹿编辑器百度版
    const XL_Edit_Sogou = 116; /// 小鹿编辑器搜狗版
    const XL_Edit_Dianjing = 117; /// 小鹿编辑器点睛版
    const XL_Edit_Shenma = 118; /// 小鹿编辑器卧龙版
    const XL_Edit_Dianjing_Enterprise = 119; /// 小鹿点睛助手

    const XL_Agent_Baidu = 121; /// 小鹿编辑器百度代理商版本
    const XL_Agent_Sogou = 122; /// 小鹿编辑器搜狗代理商版本
    const XL_Agent_Dianjing = 123; /// 小鹿编辑器点睛代理商版本
    const XL_Agent_Shenma = 124; /// 小鹿编辑器卧龙代理商版本

    const XL_Report_Baidu = 131;/// 小鹿报告-百度版本
    const XL_Report_Sogou = 132; /// 小鹿报告-搜狗版本
    const XL_Report_Dianjing = 133; /// 小鹿报告-点睛版本
    const XL_Report_Shenma = 134; /// 小鹿报告-卧龙版本
    const XL_Agency = 135; /// 小鹿代理商管家
    const XL_Weixin = 136; /// 微信小程序 软件
    const XL_CRM = 137; /// 小鹿权限管理工具
    const XL_Edit_Shenma_Enterprise = 138; /// 小鹿卧龙助手

    const XLTG_Web = 200; /// 小鹿推广网站
    const XLTG_Agency = 201; /// 小鹿推广代理商
    const XLTG_Crm = 202; /// 小鹿推广CRM
    const XLTG_Weixin = 203; /// 微信小程序
    const XLTG_Look = 204; /// 鹿客




    public static function getProduct($key = '')
    {
        $allProduct = [
            100 => '品众精准大师',
            101 => '品众点睛点睛',
            102 => '品众点睛企业版',
            103 => '品众卧龙',
            104 => '品众卧龙调价助手',
            105 => '品众卧龙创意',
            106 => '品众卧龙报告',
            107 => '品众百度快查',
            110 => '小鹿推广平台',
            111 => '小鹿竞价百度版',
            112 => '小鹿竞价搜狗版',
            113 => '小鹿竞价点睛版',
            114 => '小鹿竞价卧龙版',
            115 => '小鹿编辑器百度版',
            116 => '小鹿编辑器搜狗版',
            117 => '小鹿编辑器点睛版',
            118 => '小鹿编辑器卧龙版',
            119 => '小鹿点睛助手',
            138 => '小鹿卧龙助手',
            121 => '小鹿编辑器百度代理商版本',
            122 => '小鹿编辑器搜狗代理商版本',
            123 => '小鹿编辑器点睛代理商版本',
            124 => '小鹿编辑器卧龙代理商版本',
            131 => '小鹿报告-百度版本',
            132 => '小鹿报告-搜狗版本',
            133 => '小鹿报告-点睛版本',
            134 => '小鹿报告-卧龙版本',
            135 => '小鹿代理商管家',
            136 => '微信小程序 软件',
            137 => '小鹿权限管理工具',
            200 => '小鹿推广网站',
            201 => '小鹿推广代理商' ,
            202 => '小鹿推广CRM',
            203 => '微信小程序',
            204 => '鹿客',
            999 => '小鹿卧龙助手',
        ];
        
        if (array_key_exists($key,$allProduct)) {
            return $allProduct[$key];
        }
        return $allProduct;
        
    }


    public static function getView($key = '')
    {
        $allProduct = [
            100 => 'pro',//'品众精准大师',
//            101 => '',//'品众点睛点睛',
//            102 => '',//'品众点睛企业版',
//            103 => '',//'品众卧龙',
            104 => 'pro',//'品众卧龙调价助手',
//            105 => '',//'品众卧龙创意',
//            106 => '',//'品众卧龙报告',
            107 => 'showrank',//'品众百度快查',
//            110 => '',//'小鹿推广平台',
            111 => 'bid',//'小鹿竞价百度版',
            112 => 'bid',//'小鹿竞价搜狗版',
            113 => 'bid',//'小鹿竞价点睛版',
            114 => 'bid',//'小鹿竞价卧龙版',
            115 => 'edit',//'小鹿编辑器百度版',
            116 => 'edit',//'小鹿编辑器搜狗版',
            117 => 'edit',//'小鹿编辑器点睛版',
            118 => 'shenmaedit',//'小鹿编辑器卧龙版',
            119 => 'assist',//'小鹿点睛助手',
            138 => 'shenmaassist',//'小鹿卧龙助手',
//            121 => '',//'小鹿编辑器百度代理商版本',
//            122 => '',//'小鹿编辑器搜狗代理商版本',
//            123 => '',//'小鹿编辑器点睛代理商版本',
//            124 => '',//'小鹿编辑器卧龙代理商版本',
            131 => 'report',//'小鹿报告-百度版本',
            132 => 'report',//'小鹿报告-搜狗版本',
            133 => 'report',//'小鹿报告-点睛版本',
            134 => 'report',//'小鹿报告-卧龙版本',
//            135 => '',//'小鹿代理商管家',
//            136 => '',//'微信小程序 软件',
//            137 => '',//'小鹿权限管理工具',
            200 => 'website',//'小鹿推广网站',
//            201 => '',//'小鹿推广代理商' ,
//            202 => '',//'小鹿推广CRM',
//            203 => '',//'微信小程序',
            204 => 'look',//'小鹿推广鹿客',

        ];

        if (array_key_exists($key,$allProduct)) {
            return $allProduct[$key];
        }
        return $allProduct;
    }

    public static function getDetailsModel($key)
    {
        $allModel = [
            100 => 'InsideAPI\Models\Permission\Pro',//'品众精准大师',
//            101 => '',//'品众点睛点睛',
//            102 => '',//'品众点睛企业版',
//            103 => '',//'品众卧龙',
            104 => 'InsideAPI\Models\Permission\Pro',//'品众卧龙调价助手',
//            105 => '',//'品众卧龙创意',
//            106 => '',//'品众卧龙报告',
            107 => 'InsideAPI\Models\Permission\ShowRank',//'品众百度快查',
//            110 => '',//'小鹿推广平台',
            111 => 'InsideAPI\Models\Permission\Bid',//'小鹿竞价百度版',
            112 => 'InsideAPI\Models\Permission\Bid',//'小鹿竞价搜狗版',
            113 => 'InsideAPI\Models\Permission\Bid',//'小鹿竞价点睛版',
            114 => 'InsideAPI\Models\Permission\Bid',//'小鹿竞价卧龙版',
            115 => 'InsideAPI\Models\Permission\Edit',//'小鹿编辑器百度版',
            116 => 'InsideAPI\Models\Permission\Edit',//'小鹿编辑器搜狗版',
            117 => 'InsideAPI\Models\Permission\Edit',//'小鹿编辑器点睛版',
            118 => 'InsideAPI\Models\Permission\ShenmaEdit',//'小鹿编辑器卧龙版',
            119 => 'InsideAPI\Models\Permission\Assist',//'小鹿点睛助手',
            138 => 'InsideAPI\Models\Permission\ShenmaEnterprise',//'小鹿卧龙助手',
//            121 => '',//'小鹿编辑器百度代理商版本',
//            122 => '',//'小鹿编辑器搜狗代理商版本',
//            123 => '',//'小鹿编辑器点睛代理商版本',
//            124 => '',//'小鹿编辑器卧龙代理商版本',
            131 => 'InsideAPI\Models\Permission\Report',//'小鹿报告-百度版本',
            132 => 'InsideAPI\Models\Permission\Report',//'小鹿报告-搜狗版本',
            133 => 'InsideAPI\Models\Permission\Report',//'小鹿报告-点睛版本',
            134 => 'InsideAPI\Models\Permission\Report',//'小鹿报告-卧龙版本',
//            135 => '',//'小鹿代理商管家',
//            136 => '',//'微信小程序 软件',
//            137 => '',//'小鹿权限管理工具',
            200 => 'InsideAPI\Models\Permission\Website',//'小鹿推广网站',
//            201 => '',//'小鹿推广代理商' ,
//            202 => '',//'小鹿推广CRM',
//            203 => '',//'微信小程序',
            204 => 'InsideAPI\Models\Permission\Look', // 小鹿推广鹿客
//            999 => '',//'小鹿卧龙助手',
        ];

        if (array_key_exists($key,$allModel)) {
            return $allModel[$key];
        }
    }

    // 所有有权限的产品
    public static function productHasPer()
    {
        return  [
            100 => '品众精准大师',//'',
//            101 => '',//'品众点睛点睛',
//            102 => '',//'品众点睛企业版',
//            103 => '',//'品众卧龙',
            104 => '品众卧龙调价助手',//'品众卧龙调价助手',
//            105 => '',//'品众卧龙创意',
//            106 => '',//'品众卧龙报告',
            107 => '品众百度快查',//'品众百度快查',
//            110 => '',//'小鹿推广平台',
            111 => '小鹿竞价百度版',//'小鹿竞价百度版',
            112 => '小鹿竞价搜狗版',//'小鹿竞价搜狗版',
            113 => '小鹿竞价点睛版',//'小鹿竞价点睛版',
            114 => '小鹿竞价卧龙版',//'小鹿竞价卧龙版',
            115 => '小鹿编辑器百度版',//'小鹿编辑器百度版',
            116 => '小鹿编辑器搜狗版',//'小鹿编辑器搜狗版',
            117 => '小鹿编辑器点睛版',//'小鹿编辑器点睛版',
            118 => '小鹿编辑器卧龙版',//'小鹿编辑器卧龙版',
            119 => '小鹿点睛助手',//'小鹿点睛助手',
            138 => '小鹿卧龙助手',//'小鹿卧龙助手',
//            121 => '',//'小鹿编辑器百度代理商版本',
//            122 => '',//'小鹿编辑器搜狗代理商版本',
//            123 => '',//'小鹿编辑器点睛代理商版本',
//            124 => '',//'小鹿编辑器卧龙代理商版本',
            131 => '小鹿报告-百度版本',//'小鹿报告-百度版本',
            132 => '小鹿报告-搜狗版本',//'小鹿报告-搜狗版本',
            133 => '小鹿报告-点睛版本',//'小鹿报告-点睛版本',
            134 => '小鹿报告-卧龙版本',//'小鹿报告-卧龙版本',
//            135 => '',//'小鹿代理商管家',
//            136 => '',//'微信小程序 软件',
//            137 => '',//'小鹿权限管理工具',
            200 => '小鹿推广网站',//'小鹿推广网站',
//            201 => '',//'小鹿推广代理商' ,
//            202 => '',//'小鹿推广CRM',
//            203 => '',//'微信小程序',
            204 => '鹿客',
        ];
    }
}