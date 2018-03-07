<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-03-07 10:21
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\orange_e\trade;


use by\component\pabank\orange_e\base\BaseOEReq;

class ReceivableTradingResultReq extends BaseOEReq
{
    const TradeCode = "4033  ";

    private $thirdVoucher;

    // construct
    public function __construct()
    {
    }

    function getTradeCode()
    {
        return ReceivableTradingResultReq::TradeCode;
    }

    /**
     * @return mixed
     */
    public function getThirdVoucher()
    {
        return $this->thirdVoucher;
    }

    /**
     * @param mixed $thirdVoucher
     */
    public function setThirdVoucher($thirdVoucher)
    {
        $this->thirdVoucher = $thirdVoucher;
    }
}