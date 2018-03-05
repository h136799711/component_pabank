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

namespace by\component\pabank\orange_e\payer_agreement;

use by\component\pabank\orange_e\base\BaseOEApi;

/**
 * Class PayerAgreementSingleManageApi
 * 付款人协议单笔维护
 * @package by\component\pabank\orange_e\payer_agreement
 */
class PayerAgreementSingleManageApi extends BaseOEApi
{
    /**
     * @param PayerAgreementSingleManageReq $agreementQueryReq
     * @param string $reqId
     * @return \by\infrastructure\base\CallResult
     * @throws \ReflectionException
     */
    public function call(PayerAgreementSingleManageReq $agreementQueryReq, $reqId = '')
    {
        return $this->postAndReturnResp(PayerAgreementSingleManageReq::TradeCode, $agreementQueryReq->toXml(), $reqId);
    }

    /**
     * @param $tradeCode
     * @param $body
     * @return PayerAgreementSingleManageResp|null
     * @throws \ReflectionException
     */
    protected function convertToResp($tradeCode, $body) {
        if ($tradeCode === PayerAgreementSingleManageReq::TradeCode) {
            $resp = new PayerAgreementSingleManageResp();
            if (!empty($body)) {
                $resp->fromXml($body);
            }
            return $resp;
        }

        return null;
    }
}