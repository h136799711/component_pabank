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
     * @return mixed
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param mixed $accountName
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    /**
     * @return mixed
     */
    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * @param mixed $accountNo
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
    }

    /**
     * @return mixed
     */
    public function getAgreementAcc()
    {
        return $this->agreementAcc;
    }

    /**
     * @param mixed $agreementAcc
     */
    public function setAgreementAcc($agreementAcc)
    {
        $this->agreementAcc = $agreementAcc;
    }

    /**
     * @return mixed
     */
    public function getAgreementNo()
    {
        return $this->agreementNo;
    }

    /**
     * @param mixed $agreementNo
     */
    public function setAgreementNo($agreementNo)
    {
        $this->agreementNo = $agreementNo;
    }
}