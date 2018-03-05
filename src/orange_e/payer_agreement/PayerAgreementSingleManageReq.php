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
use by\component\pabank\orange_e\constants\CardTypeFlag;

/**
 * Class PayerAgreementSingleManageReq
 * 单笔维护: 包含 新增、修改、删除
 * @package by\component\pabank\orange_e\payer_agreement
 */
class PayerAgreementSingleManageReq extends BaseOEReq
{
    const TradeCode = "4029  ";

    function getTradeCode()
    {
        return PayerAgreementSingleManageReq::TradeCode;
    }


    public function __construct()
    {
        $this->setBusiType("M8PAK");
        $this->setCardAcctFlag(CardTypeFlag::DebitCard);
    }

    private $srcAccNo;
    private $srcAccName;
    private $AGREE_NO;
    private $busiType;
    private $tranFlag;//1: 新增 2:修改 3:删除
    private $oppAccNo;
    private $oppAccName;
    private $oppBank;//银行代码
    private $mobile;
    private $cardAcctFlag;
    private $idType;
    private $idNo;
    private $detailNo;
    private $remark;

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
    public function getSrcAccName()
    {
        return $this->srcAccName;
    }

    /**
     * @param mixed $srcAccName
     */
    public function setSrcAccName($srcAccName)
    {
        $this->srcAccName = $srcAccName;
    }

    /**
     * @return mixed
     */
    public function getAGREE_NO()
    {
        return $this->AGREE_NO;
    }

    /**
     * @param mixed $AGREE_NO
     */
    public function setAGREE_NO($AGREE_NO)
    {
        $this->AGREE_NO = $AGREE_NO;
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
    public function getTranFlag()
    {
        return $this->tranFlag;
    }

    /**
     * @param mixed $tranFlag
     */
    public function setTranFlag($tranFlag)
    {
        $this->tranFlag = $tranFlag;
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
    public function getOppBank()
    {
        return $this->oppBank;
    }

    /**
     * @param mixed $oppBank
     */
    public function setOppBank($oppBank)
    {
        $this->oppBank = $oppBank;
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
    public function getCardAcctFlag()
    {
        return $this->cardAcctFlag;
    }

    /**
     * @param mixed $cardAcctFlag
     */
    public function setCardAcctFlag($cardAcctFlag)
    {
        $this->cardAcctFlag = $cardAcctFlag;
    }

    /**
     * @return mixed
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * @param mixed $idType
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;
    }

    /**
     * @return mixed
     */
    public function getIdNo()
    {
        return $this->idNo;
    }

    /**
     * @param mixed $idNo
     */
    public function setIdNo($idNo)
    {
        $this->idNo = $idNo;
    }

    /**
     * @return mixed
     */
    public function getDetailNo()
    {
        return $this->detailNo;
    }

    /**
     * @param mixed $detailNo
     */
    public function setDetailNo($detailNo)
    {
        $this->detailNo = $detailNo;
    }

    /**
     * @return mixed
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param mixed $remark
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
    }

}