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

class ReceivableTradingQueryResp extends BaseResp
{
    const TradeCode = "4035  ";

    private $totalNum;
    private $resultNum;
    private $list;


    // construct
    public function __construct()
    {
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
    public function getResultNum()
    {
        return $this->resultNum;
    }

    /**
     * @param mixed $resultNum
     */
    public function setResultNum($resultNum)
    {
        $this->resultNum = $resultNum;
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