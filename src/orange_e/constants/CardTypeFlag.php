<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-03-05 14:52
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\orange_e\constants;

/**
 * Class CardTypeFlag
 * 卡类型
 * @package by\component\pabank\orange_e\constants
 */
class CardTypeFlag
{
    /**
     * 借记卡
     */
    const DebitCard = "0";

    /**
     * 存折
     */
    const DepositBook = "1";

    /**
     * 对公账户
     */
    const ToThePublicAccount = "2";
}