<?php
/**
 * Created by PhpStorm.
 * User: itboye
 * Date: 2018/3/8
 * Time: 上午11:06
 */

namespace by\component\pabank\orange_e\trade;


use by\component\pabank\orange_e\base\BaseOEReq;

class RefundReq extends BaseOEReq
{
    const TradeCode = "4037  ";

    public function __construct()
    {
        $this->setCurrency("RMB");
        $this->setBusiType('M8PAK');
        $this->setHOResultSet4037R([]);
    }

    function getTradeCode()
    {
        return RefundReq::TradeCode;
    }

    /**
     * 添加一项
     * @param $sThirdVoucher
     * @param $cstInnerFlowNo
     * @param $oppAccNo
     * @param $oppAccName
     * @param $amount
     * @param $thirdVoucher4032
     * @param $sThirdVoucher4032
     * @param string $idType
     * @param string $idNo
     * @param string $mobile
     * @param string $remark
     */
    public function addItem($sThirdVoucher, $cstInnerFlowNo, $oppAccNo, $oppAccName, $amount, $thirdVoucher4032, $sThirdVoucher4032, $idType = '', $idNo = '', $mobile = '', $remark ='')
    {
        array_push($this->hOResultSet4037R, [
            'sThirdVoucher' => $sThirdVoucher,
            'cstInnerFlowNo' => $cstInnerFlowNo,
            'oppAccNo' => $oppAccNo,
            'oppAccName' => $oppAccName,
            'amount' => $amount,
            'thirdVoucher4032' => $thirdVoucher4032,
            'sThirdVoucher4032' => $sThirdVoucher4032,
            'idType' => $idType,
            'idNo' => $idNo,
            'mobile' => $mobile,
            'remark' => $remark
        ]);

        $this->setTotalNum(strval(count($this->hOResultSet4037R)));
        $totalAmount = floatval($this->getTotalAmount()) + floatval($amount);
        $this->setTotalAmount(strval(number_format($totalAmount, 2, ".", "")));
    }


    private $thirdVoucher;
    private $srcAccNo;
    private $currency;
    private $busiType;
    private $totalNum;
    private $totalAmount;
    private $batchRemark;
    private $hOResultSet4037R;

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
        return $this->totalAmount;
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
    public function getBatchRemark()
    {
        return $this->batchRemark;
    }

    /**
     * @param mixed $batchRemark
     */
    public function setBatchRemark($batchRemark)
    {
        $this->batchRemark = $batchRemark;
    }

    /**
     * @return mixed
     */
    public function getHOResultSet4037R()
    {
        return $this->hOResultSet4037R;
    }

    /**
     * @param mixed $hOResultSet4037R
     */
    public function setHOResultSet4037R($hOResultSet4037R)
    {
        $this->hOResultSet4037R = $hOResultSet4037R;
    }
}