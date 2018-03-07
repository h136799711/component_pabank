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


use by\component\pabank\base\BaseResp;

class ReceivableTradingResultResp extends BaseResp
{
    const TradeCode = "4033  ";

    private $thirdVoucher;
    private $busiType;
    private $currency;
    private $srcAccNo;
    private $settleType;
    private $bStt;
    private $batchInfo;
    private $list;


    // construct
    public function __construct()
    {
    }

    function getTradeCode()
    {
        return ReceivableTradingReq::TradeCode;
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

    /**
     * @return mixed
     */
    public function getBusiType()
    {
        return $this->busiType;
    }

    /**
     * @param mixed $busiType
     */
    public function setBusiType($busiType)
    {
        $this->busiType = $busiType;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getSrcAccNo()
    {
        return $this->srcAccNo;
    }

    /**
     * @param mixed $srcAccNo
     */
    public function setSrcAccNo($srcAccNo)
    {
        $this->srcAccNo = $srcAccNo;
    }

    /**
     * @return mixed
     */
    public function getSettleType()
    {
        return $this->settleType;
    }

    /**
     * @param mixed $settleType
     */
    public function setSettleType($settleType)
    {
        $this->settleType = $settleType;
    }

    /**
     * @return mixed
     */
    public function getBStt()
    {
        return $this->bStt;
    }

    /**
     * @param mixed $bStt
     */
    public function setBStt($bStt)
    {
        $this->bStt = $bStt;
    }

    /**
     * @return mixed
     */
    public function getBatchInfo()
    {
        return $this->batchInfo;
    }

    /**
     * @param mixed $batchInfo
     */
    public function setBatchInfo($batchInfo)
    {
        $this->batchInfo = $batchInfo;
    }

    /**
     * @return mixed
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param mixed $list
     */
    public function setList($list)
    {
        $this->list = $list;
    }
}