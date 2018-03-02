<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-02-11 14:36
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\b2bi\helper;


use by\infrastructure\helper\CallResultHelper;

class XmlCurlHelper
{
    public static function postXml($url, $data, $timeout = 90)
    {
        $ch = curl_init();
        $header = [];
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type:text/xml; charset=utf-8"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);//Post提交的数据包
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout); // 设置cURL允许执行的最长秒数
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_HEADER, $header);
        $result = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        if (!empty($err)) {
            return CallResultHelper::fail('[CURL]'.$err, '[REPLY]'.$result);
        }
        return CallResultHelper::success($result);
    }
}