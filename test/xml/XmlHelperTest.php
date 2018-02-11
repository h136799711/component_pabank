<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-02-11 13:44
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace byTest\component\pabank\xml;

use by\component\pabank\config\MobileTest2Config;
use by\component\pabank\helper\XmlCurlHelper;
use by\component\pabank\helper\XmlHelper;
use by\component\pabank\orange_e\payer_agreement\PayerAgreementQueryReq;
use PHPUnit\Framework\TestCase;

class XmlHelperTest extends TestCase
{
    /**
     * @throws \ReflectionException
     */
    public function testLoad()
    {
        $req = new PayerAgreementQueryReq();
        $req->setPageNo(0);
        $req->setAGREE_NO('110');
        $req->setBusiType('110');
        $req->setStatus('1');
        $req->setOppAccName('3');
        $req->setOppAccNo('2');
        $req->setMobile('18557515452');
        $req->setEndDate('20170501');
        $req->setStartDate('20170201');
        $req->setSrcAccNo('1100');

        $xml = XmlHelper::getXmlFromObject($req);
        var_dump($xml);
        $config = new MobileTest2Config();

        $result = XmlCurlHelper::postXml($config->getBaseApiUrl(), $req->toXml());
        var_dump($result);
    }
}