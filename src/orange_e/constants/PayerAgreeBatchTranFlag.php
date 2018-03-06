<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-03-05 16:39
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\orange_e\constants;

/**
 * Class PayerAgreeBatchTranFlag
 * 批量操作
 * @package by\component\pabank\orange_e\constants
 */
class PayerAgreeBatchTranFlag
{
    const ADD = "1";

    const REPLACE = "2";

    const DELETE = "3";
    /**
     * 清空
     */
    const CLEAR = "4";
}