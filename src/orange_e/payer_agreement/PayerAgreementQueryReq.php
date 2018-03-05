<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-02-09 14:53
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\orange_e\payer_agreement;

use by\component\pabank\orange_e\base\BaseOEReq;

/**
 * Class PayerAgreementQueryReq
 * @package by\component\pabank\orange_e\payer_agreement
 */
class PayerAgreementQueryReq extends BaseOEReq
{
    const TradeCode = "4028  ";

    function getTradeCode()
    {
        return PayerAgreementQueryReq::TradeCode;
    }


    private $srcAccNo;
    private $startDate;
    private $endDate;
    private $oppAccNo;
    private $oppAccName;//
    private $mobile;// 付款人手机号
    private $busiType;
    private $status;
    private $pageNo;

    public function __construct()
    {
        $this->setBusiType("M8PAK");// 默认为该值
        $this->setStatus(0);// 0是正常 截止20180211, 只支持这个0正常状态
        $this->setPageNo(1);
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
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param mixed $pageNo
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
    }

}