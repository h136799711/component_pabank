<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-02-09 14:49
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\config;

/**
 * Class BaseConfig
 * 通用配置信息
 * @package by\component\pabank\config
 */
abstract class BaseConfig
{
    /**
     * b2bi代理端口地址
     */
    private $b2biProxyUri;

    /**
     * 请求基础地址
     */
    private $baseApiUrl;

    private $accountName;//户名
    private $accountNo;//企业代码
    private $agreementAcc;//签约账户
    private $agreementNo;//协议号

    /**
     * @return mixed
     */
    public function getB2biProxyUri()
    {
        return $this->b2biProxyUri;
    }

    /**
     * @param mixed $b2biProxyUri
     */
    public function setB2biProxyUri($b2biProxyUri)
    {
        $this->b2biProxyUri = $b2biProxyUri;
    }

    /**
     * @return mixed
     */
    public function getBaseApiUrl()
    {
        return $this->baseApiUrl;
    }

    /**
     * @param mixed $baseApiUrl
     */
    public function setBaseApiUrl($baseApiUrl)
    {
        $this->baseApiUrl = $baseApiUrl;
    }

    /**
     * 获取户名
     * @return mixed
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * 设置户名
     * @param mixed $accountName
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    /**
     * 获取企业代码
     * @return mixed
     */
    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * 设置企业代码
     * @param mixed $accountNo
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
    }

    /**
     * 获取协议签约账户
     * @return mixed
     */
    public function getAgreementAcc()
    {
        return $this->agreementAcc;
    }

    /**
     * 设置协议签约账户
     * @param mixed $agreementAcc
     */
    public function setAgreementAcc($agreementAcc)
    {
        $this->agreementAcc = $agreementAcc;
    }

    /**
     * 获取协议号
     * @return mixed
     */
    public function getAgreementNo()
    {
        return $this->agreementNo;
    }

    /**
     * 设置协议号
     * @param mixed $agreementNo
     */
    public function setAgreementNo($agreementNo)
    {
        $this->agreementNo = $agreementNo;
    }
}