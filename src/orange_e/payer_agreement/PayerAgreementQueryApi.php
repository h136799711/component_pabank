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

use by\component\pabank\helper\ReqIdHelper;
use by\component\pabank\orange_e\base\BaseOEApi;

/**
 * Class PayerAgreementQueryApi
 * 付款协议查询
 * @package by\component\pabank\orange_e\payer_agreement
 */
class PayerAgreementQueryApi extends BaseOEApi
{
    /**
     * @param PayerAgreementQueryReq $agreementQueryReq
     * @return \by\infrastructure\base\CallResult
     * @throws \ReflectionException
     */
    public function call(PayerAgreementQueryReq $agreementQueryReq)
    {
        $xml = $agreementQueryReq->toXml('Result');
        $reqId = ReqIdHelper::getOrangeEReqId();
        return $this->proxy->post(PayerAgreementQueryReq::TradeCode, $reqId, $this->outreachCustomerCode, $xml);
    }
}