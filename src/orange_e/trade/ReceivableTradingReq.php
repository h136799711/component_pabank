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
use by\component\pabank\orange_e\constants\CardTypeFlag;
use by\component\pabank\orange_e\constants\CertificationType;

class ReceivableTradingReq extends BaseOEReq
{
    const TradeCode = "4032  ";

    private $thirdVoucher;
    private $busiType;
    private $currency;
    private $srcAccNo;
    private $totalNum;
    private $totalAmount;
    private $settleType;
    private $hOResultSet4032R;

    // construct
    public function __construct()
    {
        $this->setCurrency('RMB');
        $this->setBusiType('M8PAK');
        $this->setHOResultSet4032R([]);
    }

    function getTradeCode()
    {
        return ReceivableTradingReq::TradeCode;
    }

    /**
     * 添加一笔明细
     * @param string $cstInnerFlowNo 此字段为订单号，需保持唯一
     * @param $amount
     * @param string $oppAccNo 银行卡号
     * @param string $oppAccName 姓名
     * @param string $oppBank 银行卡类别
     * @param string $mobile 手机号
     * @param string $idNo 证件号码
     * @param string $postScript 备注
     * @param string $idType 证件类型：默认 身份证
     * @param string $cardAcctFlag 银行卡类别：默认 借记卡
     */
    public function addItem($cstInnerFlowNo, $amount, $oppAccNo, $oppAccName, $oppBank, $mobile, $idNo, $postScript = '', $idType = CertificationType::ID_CARD, $cardAcctFlag = CardTypeFlag::DebitCard)
    {
        $sThirdVoucher = count($this->hOResultSet4032R) + 1;
        array_push($this->hOResultSet4032R, [
            'amount' => $amount,
            'cstInnerFlowNo' => $cstInnerFlowNo,
            'sThirdVoucher' => $sThirdVoucher,
            'oppAccNo' => $oppAccNo,
            'oppAccName' => $oppAccName,
            'oppBank' => $oppBank,
            'mobile' => $mobile,
            'idNo' => $idNo,
            'idType' => $idType,
            'cardAcctFlag' => $cardAcctFlag,
            'postScript' => $postScript
        ]);
        $this->setTotalNum(strval(count($this->hOResultSet4032R)));
    }

    /**
     * @return mixed
     */
    public function getHOResultSet4032R()
    {
        return $this->hOResultSet4032R;
    }

    /**
     * @param mixed $hOResultSet4032R
     */
    public function setHOResultSet4032R($hOResultSet4032R)
    {
        if (is_array($hOResultSet4032R)) {
            $this->hOResultSet4032R = $hOResultSet4032R;
            $this->setTotalNum(strval(count($this->hOResultSet4032R)));
        }
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

    /**
     * @return mixed
     */
    public function getTotalAmount()
    {
        $this->totalAmount = 0;
        foreach ($this->hOResultSet4032R as $key => $value) {
            $this->totalAmount += floatval($value['amount']);
        }
        return strval(number_format($this->totalAmount, 2, ".", ""));
    }

    /**
     * @param mixed $totalAmount
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
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

}