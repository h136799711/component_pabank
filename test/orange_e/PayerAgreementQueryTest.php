<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-03-01 10:29
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace byTest\component\pabank\orange_e;


use by\component\pabank\config\MobileTest1Config;
use by\component\pabank\config\MobileTest2Config;
use by\component\pabank\config\MobileTest3Config;
use by\component\pabank\orange_e\payer_agreement\PayerAgreementQueryApi;
use by\component\pabank\orange_e\payer_agreement\PayerAgreementQueryReq;
use by\component\pabank\packet\A1001Header;
use PHPUnit\Framework\TestCase;

class PayerAgreementQueryTest extends TestCase
{
    /**
     * @throws \ReflectionException
     */
    public function testCall()
    {
        $config = new MobileTest1Config();
//        $config = new MobileTest2Config();
        $config = new MobileTest3Config();
        $req = $this->getReq();
        $req->setSrcAccNo($config->getAgreementAcc());
        $req->setAGREE_NO('');
        $api = new PayerAgreementQueryApi($config);
        var_dump($req->toXml());
        $result = $api->call($req);
        $header = $result->getData();
        var_dump($result);
        if ($header instanceof A1001Header) {
            var_dump(mb_convert_encoding($header->getRetDesc() , "gbk", "utf-8"));
        }
    }

    /**
     * @return PayerAgreementQueryReq
     */
    private function getReq()
    {
        $req = new PayerAgreementQueryReq();
        $req->setPageNo(1);
        $req->setBusiType('');
        $req->setOppAccName('');
        $req->setMobile('');
        $req->setStartDate('');
        $req->setEndDate('');
//        $req->setMobile('18557515452');
//        $req->setAGREE_NO('110');
//        $req->setStatus('0');
//        $req->setOppAccName('3');
//        $req->setEndDate('20180301');
//        $req->setStartDate('20180301');
//        $req->setSrcAccNo('1100');
        return $req;
    }
}