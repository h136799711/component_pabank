<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-03-01 15:17
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\helper;


class ReqIdHelper
{
    /**
     * 20位
     */
    public static function getOrangeEReqId()
    {
        $float = microtime(true);
        $tmp = explode(".", $float);
        if (is_array($tmp) && count($tmp) == 2 && strlen($tmp[1]) == 4) {
            $id = date('YmdHis', $tmp[0]).$tmp[1];
        } else {
            $id = date('YmdHis').rand(1000, 9999);
        }

        return 'OE'.$id;
    }
}