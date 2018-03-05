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


use by\component\pabank\config\MobileTest2Config;
use by\component\pabank\orange_e\constants\BankType;
use by\component\pabank\orange_e\constants\CardTypeFlag;
use by\component\pabank\orange_e\constants\CertificationType;
use by\component\pabank\orange_e\payer_agreement\PayerAgreementSingleManageApi;
use by\component\pabank\orange_e\payer_agreement\PayerAgreementSingleManageReq;
use by\component\pabank\orange_e\payer_agreement\PayerAgreementSingleManageResp;
use PHPUnit\Framework\TestCase;

class PayerAgreementSingleManageTest extends TestCase
{
    /**
     * @throws \ReflectionException
     */
    public function testCall()
    {
        date_default_timezone_set("Asia/Shanghai");
//        $config = new MobileTest1Config();
        $config = new MobileTest2Config();
//        $config = new MobileTest3Config();
        $req = $this->getReq();
        $req->setSrcAccNo($config->getAgreementNo());
        $req->setSrcAccName($config->getAccountName());

        $api = new PayerAgreementSingleManageApi($config);

        $result = $api->call($req);
        $data = $result->getData();
        if ($result->isSuccess() && $data instanceof PayerAgreementSingleManageResp) {
            var_dump($result->getData());
        } else {
            var_dump($result);
            var_dump(mb_convert_encoding($result->getMsg(), "gbk", "utf-8"));
        }

    }

    /**
     * @return PayerAgreementSingleManageReq
     */
    private function getReq()
    {
        $req = new PayerAgreementSingleManageReq();
        // 行内
        $req->setOppBank(BankType::PING_AN_Bank);
        $req->setOppAccName('互联网');
        $req->setOppAccNo('6221558812340000');
        $req->setMobile("13552535506");
        $req->setIdType(CertificationType::ID_CARD);
        $req->setIdNo('341126197709218366');
        $req->setCardAcctFlag(CardTypeFlag::DebitCard);
        $req->setTranFlag("1");
        $req->setRemark('测试');
        return $req;
    }
}