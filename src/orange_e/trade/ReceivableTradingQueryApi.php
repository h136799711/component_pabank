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
 * Class ReceivableTradingQueryApi
 * 交易明细查询接口 4035
 * @package by\component\pabank\orange_e\trade
 */
class ReceivableTradingQueryApi extends BaseOEApi
{
    /**
     * @param ReceivableTradingQueryReq $tradingQueryReq
     * @param string $reqId
     * @return \by\infrastructure\base\CallResult
     * @throws \ReflectionException
     */
    public function call(ReceivableTradingQueryReq $tradingQueryReq, $reqId = '')
    {
        return $this->postAndReturnResp(ReceivableTradingQueryReq::TradeCode, $tradingQueryReq->toXml(), $reqId);
    }

    /**
     *
     * @param  $tradeCode
     * @param  $body
     * @return ReceivableTradingQueryResp|null
     * @throws \ReflectionException
     */
    protected function convertToResp($tradeCode, $body) {
        if ($tradeCode === ReceivableTradingQueryReq::TradeCode) {
            $resp = new ReceivableTradingQueryResp();
            if (!empty($body)) {
                $resp->fromXml($body);
            }
            return $resp;
        }
        return null;
    }
}