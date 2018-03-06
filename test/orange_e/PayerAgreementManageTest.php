<?php
///**
// * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
// * @author    hebidu<346551990@qq.com>
// * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
// * @link      http://www.itboye.com/
// * @license   http://www.opensource.org/licenses/mit-license.php MIT License
// * Revision History Version
// ********1.0.0********************
// * file created @ 2018-03-01 10:29
// *********************************
// ********1.0.1********************
// *
// *********************************
// */
//
//namespace byTest\component\pabank\orange_e;
//
//
//use by\component\pabank\config\MobileTest2Config;
//use by\component\pabank\orange_e\constants\BankType;
//use by\component\pabank\orange_e\constants\CardTypeFlag;
//use by\component\pabank\orange_e\constants\CertificationType;
//use by\component\pabank\orange_e\constants\PayerAgreeBatchTranFlag;
//use by\component\pabank\orange_e\constants\PayerAgreeTranFlag;
//use by\component\pabank\orange_e\payer_agreement\PayerAgreementManageApi;
//use by\component\pabank\orange_e\payer_agreement\PayerAgreementManageReq;
//use by\component\pabank\orange_e\payer_agreement\PayerAgreementSingleManageReq;
//use by\component\pabank\orange_e\payer_agreement\PayerAgreementSingleManageResp;
//use PHPUnit\Framework\TestCase;
//
//class PayerAgreementManageTest extends TestCase
//{
//    /**
//     * @throws \ReflectionException
//     */
//    public function testCall()
//    {
//        date_default_timezone_set("Asia/Shanghai");
////        $config = new MobileTest1Config();
//        $config = new MobileTest2Config();
////        $config = new MobileTest3Config();
//        // add
////        $req = $this->getReqForAdd();
//        // delete
//        $req = $this->getReqForDelete();
////        $req->setDetailNo("1000000434");
//        //update
////        $req = $this->getReqForUpdate();
////        $req->setDetailNo("1000000436");
//
//        //clear
////        $req = $this->getReqForCLEAR();
//        $req->setSrcAccNo($config->getAgreementAcc());
////        $req->setAGREE_NO($config->getAgreementNo());
//        var_dump($req->toXml());
////
//        $api = new PayerAgreementManageApi($config);
//
//        $result = $api->call($req);
//        $data = $result->getData();
//        if ($result->isSuccess() && $data instanceof PayerAgreementSingleManageResp) {
//            var_dump($result->getData());
//        } else {
//            var_dump($result);
//            var_dump(mb_convert_encoding($result->getMsg(), "gbk", "utf-8"));
//        }
//
//    }
//
//    /**
//     * @return PayerAgreementManageReq
//     */
//    private function getReqForDelete()
//    {
//        $req = new PayerAgreementManageReq();
//        $req->addItem('6221558812340000', '互联网', BankType::PING_AN_Bank, "13552535506", '341126197709218366');
//        $req->setTranFlag(PayerAgreeBatchTranFlag::DELETE);
//        return $req;
//    }
//
//    /**
//     * @return PayerAgreementManageReq
//     */
//    private function getReqForCLEAR()
//    {
//        $req = new PayerAgreementManageReq();
//        // 行内
////        $req->addItem('6221558812340000', '互联网', BankType::PING_AN_Bank, "13552535506", '341126197709218366');
//        $req->setTranFlag(PayerAgreeBatchTranFlag::CLEAR);
//        return $req;
//    }
//
//    /**
//     * @return PayerAgreementManageReq
//     */
//    private function getReqForAdd()
//    {
//        $req = new PayerAgreementManageReq();
//        $req->addItem('6221558812340000', '互联网', BankType::PING_AN_Bank, "13552535506", '341126197709218366');
//        $req->addItem('6226090000000048', '张三', BankType::CMB_BANK, "18100000000", '510265790128303');
//        $req->setTranFlag(PayerAgreeBatchTranFlag::ADD);
//        return $req;
//    }
//
//    /**
//     * @return PayerAgreementSingleManageReq
//     */
//    private function getReqForUpdate()
//    {
//        $req = new PayerAgreementSingleManageReq();
//        // 行内
//        $req->setOppBank(BankType::CC_BANK);
//        $req->setOppAccName('王老五2');
//        $req->setOppAccNo('62266206077922077');
//        $req->setMobile("13552535506");
//        $req->setIdType(CertificationType::ID_CARD);
//        $req->setIdNo('340102198212062037');
//        $req->setCardAcctFlag(CardTypeFlag::DebitCard);
//        $req->setTranFlag(PayerAgreeTranFlag::UPDATE);
//        $req->setRemark('test_for_update');
//        $req->setDetailNo('1000000429');
//        return $req;
//    }
//}