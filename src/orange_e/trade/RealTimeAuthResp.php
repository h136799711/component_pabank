<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-03-07 10:21
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\orange_e\trade;

use by\component\pabank\base\BaseResp;

/**
 * Class RealTimeAuthResp
 * 实时鉴权 4036
 * @package by\component\pabank\orange_e\trade
 */
class RealTimeAuthResp extends BaseResp
{
    // construct
    public function __construct()
    {
    }

    private $authSeqNo;
    private $bECIF;
    private $acctType;
    private $idCheckFlag;

    /**
     * @return mixed
     */
    public function getAuthSeqNo()
    {
        return $this->authSeqNo;
    }

    /**
     * @param mixed $authSeqNo
     */
    public function setAuthSeqNo($authSeqNo)
    {
        $this->authSeqNo = $authSeqNo;
    }

    /**
     * @return mixed
     */
    public function getBECIF()
    {
        return $this->bECIF;
    }

    /**
     * @param mixed $bECIF
     */
    public function setBECIF($bECIF)
    {
        $this->bECIF = $bECIF;
    }

    /**
     * @return mixed
     */
    public function getAcctType()
    {
        return $this->acctType;
    }

    /**
     * @param mixed $acctType
     */
    public function setAcctType($acctType)
    {
        $this->acctType = $acctType;
    }

    /**
     * @return mixed
     */
    public function getIdCheckFlag()
    {
        return $this->idCheckFlag;
    }

    /**
     * @param mixed $idCheckFlag
     */
    public function setIdCheckFlag($idCheckFlag)
    {
        $this->idCheckFlag = $idCheckFlag;
    }
}