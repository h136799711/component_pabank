<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-02-09 14:53
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\orange_e\payer_agreement;

use by\component\pabank\base\BaseResp;

/**
 * Class PayerAgreementQueryResp
 * 付款人协议查询返回
 * @package by\component\pabank\orange_e\payer_agreement
 */
class PayerAgreementQueryResp extends BaseResp
{
    private $AGREE_NO;
    private $totalNum;
    private $totalPage;
    private $perPageNum;

    private $list;

    /**
     * @return mixed
     */
    public function getAGREE_NO()
    {
        return $this->AGREE_NO;
    }

    /**
     * @param mixed $AGREE_NO
     */
    public function setAGREE_NO($AGREE_NO)
    {
        $this->AGREE_NO = $AGREE_NO;
    }

    /**
     * @return mixed
     */
    public function getTotalNum()
    {
        return $this->totalNum;
    }

    /**
     * @param mixed $totalNum
     */
    public function setTotalNum($totalNum)
    {
        $this->totalNum = $totalNum;
    }

    /**
     * @return mixed
     */
    public function getTotalPage()
    {
        return $this->totalPage;
    }

    /**
     * @param mixed $totalPage
     */
    public function setTotalPage($totalPage)
    {
        $this->totalPage = $totalPage;
    }

    /**
     * @return mixed
     */
    public function getPerPageNum()
    {
        return $this->perPageNum;
    }

    /**
     * @param mixed $perPageNum
     */
    public function setPerPageNum($perPageNum)
    {
        $this->perPageNum = $perPageNum;
    }

    /**
     * @return mixed
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param mixed $list
     */
    public function setList($list)
    {
        $this->list = $list;
    }
}