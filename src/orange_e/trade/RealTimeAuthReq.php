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

    private $srcAccNo;
    private $busiId;
    private $busiType;
    private $bankCode;
    private $oppAccNo;
    private $oppAccName;
    private $sex;
    private $idType;
    private $idNo;
    private $birthDate;
    private $mobile;
    private $dcType;
    private $cVV2;
    private $cardValidPeriod;
    private $verifyType;
    private $remark;



    // construct
    public function __construct()
    {
        $this->setBusiId('');
        $this->setAGREE_NO('');
        $this->setBusiType('M8PAK');
    }

    function getTradeCode()
    {
        return RealTimeAuthReq::TradeCode;
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
    public function getBusiId()
    {
        return $this->busiId;
    }

    /**
     * @param mixed $busiId
     */
    public function setBusiId($busiId)
    {
        $this->busiId = $busiId;
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
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * @param mixed $bankCode
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
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
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
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
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param mixed $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
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
    public function getDcType()
    {
        return $this->dcType;
    }

    /**
     * @param mixed $dcType
     */
    public function setDcType($dcType)
    {
        $this->dcType = $dcType;
    }

    /**
     * @return mixed
     */
    public function getCVV2()
    {
        return $this->cVV2;
    }

    /**
     * @param mixed $cVV2
     */
    public function setCVV2($cVV2)
    {
        $this->cVV2 = $cVV2;
    }

    /**
     * @return mixed
     */
    public function getCardValidPeriod()
    {
        return $this->cardValidPeriod;
    }

    /**
     * @param mixed $cardValidPeriod
     */
    public function setCardValidPeriod($cardValidPeriod)
    {
        $this->cardValidPeriod = $cardValidPeriod;
    }

    /**
     * @return mixed
     */
    public function getVerifyType()
    {
        return $this->verifyType;
    }

    /**
     * @param mixed $verifyType
     */
    public function setVerifyType($verifyType)
    {
        $this->verifyType = $verifyType;
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