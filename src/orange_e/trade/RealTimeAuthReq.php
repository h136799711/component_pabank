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

/**
 * Class RealTimeAuthReq
 * 实时鉴权 4036
 * @package by\component\pabank\orange_e\trade
 */
class RealTimeAuthReq extends BaseOEReq
{
    const TradeCode = "4036  ";

    private $thirdVoucher;
    private $busiType;
    private $startDate;
    private $endDate;
    private $cstInnerFlowNo;
    private $oppAccNo;
    private $oppAccName;
    private $pageSize;
    private $pageNum;


    // construct
    public function __construct()
    {
    }

    function getTradeCode()
    {
        return ReceivableTradingQueryReq::TradeCode;
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
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getCstInnerFlowNo()
    {
        return $this->cstInnerFlowNo;
    }

    /**
     * @param mixed $cstInnerFlowNo
     */
    public function setCstInnerFlowNo($cstInnerFlowNo)
    {
        $this->cstInnerFlowNo = $cstInnerFlowNo;
    }

    /**
     * @return mixed
     */
    public function getOppAccNo()
    {
        return $this->oppAccNo;
    }

    /**
     * @param mixed $oppAccNo
     */
    public function setOppAccNo($oppAccNo)
    {
        $this->oppAccNo = $oppAccNo;
    }

    /**
     * @return mixed
     */
    public function getOppAccName()
    {
        return $this->oppAccName;
    }

    /**
     * @param mixed $oppAccName
     */
    public function setOppAccName($oppAccName)
    {
        $this->oppAccName = $oppAccName;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return mixed
     */
    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * @param mixed $pageNum
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum = $pageNum;
    }
}