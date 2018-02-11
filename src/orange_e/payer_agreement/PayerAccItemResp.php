<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-02-11 14:17
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\orange_e\payer_agreement;


class PayerAccItemResp
{
    private $oppAccNo;
    private $oppAccName;
    private $oppBank;
    private $srcAccNo;
    private $srcAccName;
    private $effectDate;
    private $status;
    private $mobile;
    private $cardAccFlag;
    private $idType;
    private $idNo;
    private $busiType;
    private $detailNo;

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
    public function getEffectDate()
    {
        return $this->effectDate;
    }

    /**
     * @param mixed $effectDate
     */
    public function setEffectDate($effectDate)
    {
        $this->effectDate = $effectDate;
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
    public function getCardAccFlag()
    {
        return $this->cardAccFlag;
    }

    /**
     * @param mixed $cardAccFlag
     */
    public function setCardAccFlag($cardAccFlag)
    {
        $this->cardAccFlag = $cardAccFlag;
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
}