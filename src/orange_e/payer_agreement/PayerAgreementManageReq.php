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
 * Class PayerAgreementManageReq
 * 批量维护: 包含 新增、替换、删除、清空
 * @package by\component\pabank\orange_e\payer_agreement
 */
class PayerAgreementManageReq extends BaseOEReq
{
    const TradeCode = "4030  ";
    private $srcAccNo;
    private $busiType;
private $tranFlag;
private $totalNum;

    public function __construct()
    {
        $this->setBusiType("M8PAK");
    }//1: 新增 2:替换全部 3:删除 4: 清空

    function getTradeCode()
    {
        return PayerAgreementManageReq::TradeCode;
    }//总笔数

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