<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-02-09 14:50
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\config;

/**
 * Class TestConfig
 * 移动端测试环境下配置
 * 测试数据2
 * 参考 新核心ST_平安银行银企直连测试环境数据20161215.doc
 *  9. 移动收款测试数据
 * @package by\component\pabank\config
 */
class MobileTest1Config extends BaseConfig
{

    public function __construct()
    {
        $this->setB2biProxyUri("http://39.104.59.25:7072");
        $this->setBaseApiUrl("http://39.104.59.25:7072");
        $this->setAccountName('企业网银测试专用一');
        $this->setAccountNo('00401210100009527000');
        $this->setAgreementAcc('15000009150665');
        $this->setAgreementNo('Y000227935');
    }
}