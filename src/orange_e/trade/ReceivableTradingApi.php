<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-02-09 14:54
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\orange_e\trade;

use by\component\pabank\orange_e\base\BaseOEApi;

/**
 * Class ReceivableTradingApi
 * 交易接口 4032
 * @package by\component\pabank\orange_e\orange_e\trade
 */
class ReceivableTradingApi extends BaseOEApi
{
    /**
     * @param ReceivableTradingReq $agreementAuthReq
     * @param string $reqId
     * @return \by\infrastructure\base\CallResult
     * @throws \ReflectionException
     */
    public function call(ReceivableTradingReq $agreementAuthReq, $reqId = '')
    {
        return $this->postAndReturnResp(ReceivableTradingReq::TradeCode, $agreementAuthReq->toXml(), $reqId);
    }

    /**
     *
     * @param  $tradeCode
     * @param  $body
     * @return ReceivableTradingResp|null
     * @throws \ReflectionException
     */
    protected function convertToResp($tradeCode, $body) {
        if ($tradeCode === ReceivableTradingReq::TradeCode) {
            $resp = new ReceivableTradingResp();
            if (!empty($body)) {
                $resp->fromXml($body);
            }
            return $resp;
        }

        return null;
    }
}