<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-03-01 10:24
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\orange_e\base;


use by\component\pabank\b2bi\B2BiProxy;
use by\component\pabank\b2bi\packet\A1001Header;
use by\component\pabank\base\BaseApi;
use by\component\pabank\base\BaseResp;
use by\component\pabank\config\BaseConfig;
use by\component\pabank\helper\ReqIdHelper;
use by\infrastructure\helper\CallResultHelper;

class BaseOEApi extends BaseApi
{
    protected $proxy;
    protected $outreachCustomerCode;

    public function __construct(BaseConfig $config)
    {
        $this->proxy = new B2BiProxy($config->getB2biProxyUri());
        $this->outreachCustomerCode = $config->getAccountNo();
    }

    protected function postAndReturnResp($tradeCode, $xml, $reqId = '')
    {
        if (empty($reqId)) {
            $reqId = ReqIdHelper::getOrangeEReqId();
        }

        $ret = $this->proxy->post($tradeCode, $reqId, $this->outreachCustomerCode, $xml);
        // 取出body，并将body转化成 Resp
        if ($ret->isSuccess()) {
            $header = $ret->getData();
            if ($header instanceof A1001Header) {
                $body = $header->getBody();
                if ($header->getRetCode() != '000000') {
                    return CallResultHelper::fail($header->getRetDesc(), $header);
                } else {
                    $resp = $this->convertToResp($tradeCode, $body);
                    $resp->setHeader($header);
                    return CallResultHelper::success($resp);
                }
            } else {
                return CallResultHelper::fail("[BASEOEAPI] 内容必须是A1001Header对象", $ret->getData());
            }
        }
        return $ret;
    }

    /**
     * @param $tradeCode
     * @param $body
     * @return BaseResp
     */
    protected function convertToResp($tradeCode, $body)
    {
    }

}