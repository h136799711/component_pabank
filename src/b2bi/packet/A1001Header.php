<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-03-01 11:12
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\b2bi\packet;


use by\infrastructure\helper\CallResultHelper;

class A1001Header
{
    const EXPECT_LENGTH = 222;

    public function parseFrom($str)
    {
        if (strlen($str) < A1001Header::EXPECT_LENGTH) {
            return CallResultHelper::fail('[A1001Header]无法解析,长度必须大于'.A1001Header::EXPECT_LENGTH);
        }
        $this->setVersion(substr($str, 0, 4));
        $this->setTarget(substr($str, 4, 2));
        $this->setEncoding(substr($str, 6, 2));
        $this->setProtocol(substr($str, 8, 2));
        $this->setOutreachCustomerCode(substr($str, 10, 20));
        $this->setPacketLen(substr($str, 30, 10));
        $this->setTradeCode(substr($str, 40, 6));
        $this->setOperatorCode(substr($str, 46, 5));
        $this->setServiceType(substr($str, 51, 2));
        $this->setTradeDate(substr($str, 53, 8));
        $this->setTradeTime(substr($str, 61, 6));
        $this->setReqId(substr($str, 67, 20));
        $this->setRetCode(substr($str, 87, 6));
        $this->setRetDesc(substr($str, 93, 100));
        $this->setContinuePackFlag(substr($str, 193, 1));
        $this->setReqNum(substr($str, 194, 3));
        $this->setSignPackId(substr($str, 197, 1));
        $this->setSignPackFormat(substr($str, 198, 1));
        $this->setSignAlg(substr($str, 199, 12));
        $this->setSignLength(substr($str, 211, 10));
        $this->setAttachment(substr($str, 221, 1));
        if (strlen($str) - 222 > 0) {
            $this->setBody(substr($str, 222, strlen($str) - 222));
        } else {
            $this->setBody('');
        }
        return CallResultHelper::success($this);
    }

    public function __toString()
    {
        $str = $this->getVersion().$this->getTarget().$this->getEncoding().$this->getProtocol();
        $str .= $this->getOutreachCustomerCode().$this->getPacketLen().$this->getTradeCode().$this->getOperatorCode().$this->getServiceType().$this->getTradeDate().$this->getTradeTime();
        $str .= $this->getReqId().$this->getRetCode().$this->getRetDesc().$this->getContinuePackFlag().$this->getReqNum().$this->getSignPackId().$this->getSignPackFormat().$this->getSignAlg().$this->getSignLength().$this->getAttachment();
        return $str;
    }

    public function __construct($tradeCode, $reqId, $dataLength, $outreachCustomerCode, $target = TargetSystemCodeType::OrangeESystem)
    {
        $this->setTarget($target);
        $this->setOutreachCustomerCode($outreachCustomerCode);
        $this->setTradeCode(str_pad($tradeCode, "6", " ", STR_PAD_RIGHT));
        $this->setReqId($reqId);
        $this->setPacketLen($dataLength);

        $this->setVersion("A001");
        $this->setEncoding(PacketEncodingType::UTF8);
        $this->setProtocol(ProtocolType::HTTP);
        $this->setOperatorCode('00000');
        $this->setServiceType("01");
        $this->setTradeDate(date('Ymd'));
        $this->setTradeTime(date('His'));
        $this->setRetCode('000000');
        $this->setRetDesc(str_pad('', 100, ' '));
        $this->setContinuePackFlag("0");
        $this->setReqNum('000');
        $this->setSignPackId("0");
        $this->setSignPackFormat('1');
        $this->setSignAlg('RSA-SHA1    ');
        $this->setSignLength('0000000000');
        $this->setAttachment("0");
    }

    /**
     * 主体内容
     */
    private $body;

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * 报文版本
     */
    private $version;
    /**
     * 目标系统
     */
    private $target;
    /**
     * 编码
     */
    private $encoding;
    /**
     * 通讯协议
     */
    private $protocol;
    /**
     * 外联客户代码
     */
    private $outreachCustomerCode;
    /**
     * 报文长度 数字 10位
     */
    private $packetLen;
    /**
     * 交易码 6 位
     */
    private $tradeCode;
    /**
     * 操作员代码
     */
    private $operatorCode;
    /**
     * 服务类型
     */
    private $serviceType;
    /**
     * yyyymmdd
     */
    private $tradeDate;
    /**
     * hhmmss
     */
    private $tradeTime;
    /**
     * 唯一标识一笔交易（企业随机生成唯一流水号）
     *    备注：（如果某种交易要有多次请求的才能完成的，多个交易请求包流水号要保持一致）
     */
    private $reqId;

    /**
     * Chat(6)
     * 请求时必须填写000000
     * 非“000000”代表交易受理异常或失败
     */
    private $retCode;

    /**
     * Chat(100)
     * 格式为 “:交易成功”；其中冒号为英文格式半角。
     */
    private $retDesc;

    /**
     * Char(1)
     * 后续包标志 N	0-结束包，1-还有后续包
     * 目前仅支持0
     */
    private $continuePackFlag;

    /**
     * num(3)
     * 如果有后续包请求
     * 第一次000
     * 第二次001
     * 第三次002依此增加
     * 目前仅支持000
     */
    private $reqNum;

    /**
     * 0 - 不签名
     * 1 - 签名
     * 目前仅支持 填 0
     */
    private $signPackId;

    /**
     * 0 - 裸签
     * 1 - PKCS7
     * 目前仅支持送1
     */
    private $signPackFormat;
    /**
     * 签名算法
     * RSA-SHA1
     */
    private $signAlg;
    /**
     * 签名数据长度
     * num(10)
     * 目前仅支持 填写0
     */
    private $signLength;

    /**
     * 附件 没有,默认为0；有的话填具体个数，最多9个
     * num(1)
     */
    private $attachment;

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return mixed
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param mixed $target
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * @return mixed
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * @param mixed $encoding
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
    }

    /**
     * @return mixed
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @param mixed $protocol
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
    }

    /**
     * @return mixed
     */
    public function getOutreachCustomerCode()
    {
        return $this->outreachCustomerCode;
    }

    /**
     * @param mixed $outreachCustomerCode
     */
    public function setOutreachCustomerCode($outreachCustomerCode)
    {
        $this->outreachCustomerCode = $outreachCustomerCode;
    }

    /**
     * @return mixed
     */
    public function getPacketLen()
    {
        return $this->packetLen;
    }

    /**
     * @param mixed $packetLen
     */
    public function setPacketLen($packetLen)
    {
        $this->packetLen = $packetLen;
    }

    /**
     * @return mixed
     */
    public function getTradeCode()
    {
        return $this->tradeCode;
    }

    /**
     * @param mixed $tradeCode
     */
    public function setTradeCode($tradeCode)
    {
        $this->tradeCode = $tradeCode;
    }

    /**
     * @return mixed
     */
    public function getOperatorCode()
    {
        return $this->operatorCode;
    }

    /**
     * @param mixed $operatorCode
     */
    public function setOperatorCode($operatorCode)
    {
        $this->operatorCode = $operatorCode;
    }

    /**
     * @return mixed
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * @param mixed $serviceType
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
    }

    /**
     * @return mixed
     */
    public function getTradeDate()
    {
        return $this->tradeDate;
    }

    /**
     * @param mixed $tradeDate
     */
    public function setTradeDate($tradeDate)
    {
        $this->tradeDate = $tradeDate;
    }

    /**
     * @return mixed
     */
    public function getTradeTime()
    {
        return $this->tradeTime;
    }

    /**
     * @param mixed $tradeTime
     */
    public function setTradeTime($tradeTime)
    {
        $this->tradeTime = $tradeTime;
    }

    /**
     * @return mixed
     */
    public function getReqId()
    {
        return $this->reqId;
    }

    /**
     * @param mixed $reqId
     */
    public function setReqId($reqId)
    {
        $this->reqId = $reqId;
    }

    /**
     * @return mixed
     */
    public function getRetCode()
    {
        return $this->retCode;
    }

    /**
     * @param mixed $retCode
     */
    public function setRetCode($retCode)
    {
        $this->retCode = $retCode;
    }

    /**
     * @return mixed
     */
    public function getRetDesc()
    {
        return $this->retDesc;
    }

    /**
     * @param mixed $retDesc
     */
    public function setRetDesc($retDesc)
    {
        $this->retDesc = $retDesc;
    }

    /**
     * @return mixed
     */
    public function getContinuePackFlag()
    {
        return $this->continuePackFlag;
    }

    /**
     * @param mixed $continuePackFlag
     */
    public function setContinuePackFlag($continuePackFlag)
    {
        $this->continuePackFlag = $continuePackFlag;
    }

    /**
     * @return mixed
     */
    public function getReqNum()
    {
        return $this->reqNum;
    }

    /**
     * @param mixed $reqNum
     */
    public function setReqNum($reqNum)
    {
        $this->reqNum = $reqNum;
    }

    /**
     * @return mixed
     */
    public function getSignPackId()
    {
        return $this->signPackId;
    }

    /**
     * @param mixed $signPackId
     */
    public function setSignPackId($signPackId)
    {
        $this->signPackId = $signPackId;
    }

    /**
     * @return mixed
     */
    public function getSignPackFormat()
    {
        return $this->signPackFormat;
    }

    /**
     * @param mixed $signPackFormat
     */
    public function setSignPackFormat($signPackFormat)
    {
        $this->signPackFormat = $signPackFormat;
    }

    /**
     * @return mixed
     */
    public function getSignAlg()
    {
        return $this->signAlg;
    }

    /**
     * @param mixed $signAlg
     */
    public function setSignAlg($signAlg)
    {
        $this->signAlg = $signAlg;
    }

    /**
     * @return mixed
     */
    public function getSignLength()
    {
        return $this->signLength;
    }

    /**
     * @param mixed $signLength
     */
    public function setSignLength($signLength)
    {
        $this->signLength = $signLength;
    }

    /**
     * @return mixed
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param mixed $attachment
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
    }

}