<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-02-11 15:12
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\B2biFrontMachine;


use by\component\pabank\B2biFrontMachine\helper\XmlCurlHelper;
use by\component\pabank\B2biFrontMachine\packet\A1001Header;
use by\infrastructure\helper\CallResultHelper;

class B2BiProxy
{
    private $proxyUrl;

    public function __construct($proxyUrl)
    {
        $this->proxyUrl = $proxyUrl;
    }

    /**
     * @param $tradeCode
     * @param $reqId
     * @param $outreachCustomerCode
     * @param $xml
     * @param int $timeout
     * @param string $url
     * @return \by\infrastructure\base\CallResult
     */
    public function post($tradeCode, $reqId, $outreachCustomerCode, $xml, $timeout = 90, $url = '') {
        if (empty($url)) {
            $url = $this->proxyUrl;
        }
        $header = $this->getA1001Header($tradeCode, $reqId, $outreachCustomerCode, $xml);
        if (strlen($header) !=  A1001Header::EXPECT_LENGTH) {
            return CallResultHelper::fail('[B2BI_PROXY]报文头长度为'.strlen($header).',期望为'.A1001Header::EXPECT_LENGTH, $header);
        }

        $data = $header.$xml;
        // 处理中转的错误
        $result =  XmlCurlHelper::postXml($url, $data, $timeout);
        if ($result->isSuccess()) {
            $strData = $result->getData();
            return (new A1001Header('', '', 0, ''))->parseFrom($strData);
        }
        return $result;
    }

    /**
     * A1001报文头添加
     * @param $tradeCode
     * @param $reqId
     * @param $outreachCustomerCode
     * @param $xml
     * @return  string
     */
    public function getA1001Header($tradeCode, $reqId, $outreachCustomerCode, $xml)
    {
        $dataLength = str_pad(strlen($xml), 10, "0", STR_PAD_LEFT);

        $header = new A1001Header($tradeCode, $reqId, $dataLength, $outreachCustomerCode);
        return $header->__toString();
    }

    public function getError()
    {

    }
}