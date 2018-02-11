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

namespace by\component\pabank\helper;


use by\infrastructure\helper\CallResultHelper;

class XmlCurlHelper
{
    public static function postXml($url, $data, $timeout = 90)
    {
        $ch = curl_init();
        $len = strlen($data);
        $header[] = "Content-Length: $len";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type:text/xml; charset=utf-8"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);//Post提交的数据包
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_HEADER, $header);
        $result = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        if (!empty($err)) {
            return CallResultHelper::fail($err);
        }

        return CallResultHelper::success($result);
    }
}