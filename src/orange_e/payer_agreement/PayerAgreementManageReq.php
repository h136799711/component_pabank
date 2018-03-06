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
use by\component\pabank\orange_e\constants\CertificationType;

/**
 * Class PayerAgreementManageReq
 * 批量维护: 包含 新增、替换、删除、清空
 * @package by\component\pabank\orange_e\payer_agreement
 */
class PayerAgreementManageReq extends BaseOEReq
{
    const TradeCode = "4030  ";

    private $srcAccNo;
    private $busiType;
    private $tranFlag;//1: 新增 2:替换全部 3:删除 4: 清空
    private $totalNum;//总笔数
    private $hOResultSet4030R;

    public function __construct()
    {
        $this->setBusiType("M8PAK");
        $this->setHOResultSet4030R([]);
    }

    /**
     * 添加一笔明细
     * @param string $oppAccNo   银行卡号
     * @param string $oppAccName 姓名
     * @param string $oppBank    银行卡类别
     * @param string $mobile     手机号
     * @param string $idNo       证件号码
     * @param string $idType     证件类型：默认 身份证
     * @param string $cardAcctFlag 银行卡类别：默认 借记卡
     */
    public function addItem($oppAccNo, $oppAccName, $oppBank, $mobile, $idNo, $idType = CertificationType::ID_CARD, $cardAcctFlag = CardTypeFlag::DebitCard)
    {
        array_push($this->hOResultSet4030R, [
            'oppAccNo' => $oppAccNo,
            'oppAccName' => $oppAccName,
            'oppBank' => $oppBank,
            'mobile' => $mobile,
            'idNo' => $idNo,
            'idType' => $idType,
            'cardAcctFlag' => $cardAcctFlag,
        ]);
        $this->setTotalNum(strval(count($this->hOResultSet4030R)));
    }

    /**
     * @return mixed
     */
    public function getHOResultSet4030R()
    {
        return $this->hOResultSet4030R;
    }

    /**
     * @param mixed $hOResultSet4030R
     */
    public function setHOResultSet4030R($hOResultSet4030R)
    {
        if (is_array($hOResultSet4030R)) {
            $this->hOResultSet4030R = $hOResultSet4030R;
            $this->setTotalNum(strval(count($this->hOResultSet4030R)));
        }
    }

    function getTradeCode()
    {
        return PayerAgreementManageReq::TradeCode;
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
    public function getTotalNum()
    {
        return $this->totalNum;
    }

    /**
     * @param mixed $totalNum
     */
    public function setTotalNum($totalNum)
    {
        $this->totalNum = $totalNum;
    }

}