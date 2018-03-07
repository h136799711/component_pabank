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
use by\component\pabank\orange_e\trade\ReceivableTradingReq;
use by\component\pabank\orange_e\trade\ReceivableTradingResp;
use by\component\pabank\orange_e\trade\ReceivableTradingResultReq;
use PHPUnit\Framework\TestCase;

class ReceivableTradingResultTest extends TestCase
{
    /**
     * @throws \ReflectionException
     */
    public function testCall()
    {
//        $config = new MobileTest1Config();
        $config = new MobileTest2Config();
//        $config = new MobileTest3Config();
        $req = $this->getReq();
        $req->setSrcAccNo($config->getAgreementAcc());
        $api = new ReceivableTradingResultApi($config);
        var_dump($req->toXml());
        $result = $api->call($req);
        $data = $result->getData();
        if ($result->isSuccess() && $data instanceof ReceivableTradingResp) {
            var_dump($data);
        } else {
            var_dump($result);
            var_dump(mb_convert_encoding($result->getMsg(), "gbk", "utf-8"));
        }

    }

    /**
     * @return ReceivableTradingReq
     */
    private function getReq()
    {
        $req = new ReceivableTradingResultReq();
        $thirdVoucher = 'TV'.time().rand(0000, 9999);
        $req->setThirdVoucher($thirdVoucher);
        $req->setSettleType("1");
        $cstInnerFlowNo = time();
        $req->addItem($cstInnerFlowNo, "130.01", '6226090000000048', '张三', BankType::CMB_BANK, "18100000000", '510265790128303', '交易_备注');
        return $req;
    }
}