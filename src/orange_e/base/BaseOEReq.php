<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-03-05 14:47
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\orange_e\base;


use by\component\pabank\base\BaseReq;

/**
 * Class BaseOEReq
 * 橙E 请求包
 * @package by\component\pabank\orange_e\base
 */
abstract class BaseOEReq extends BaseReq
{
    /**
     * 获取交易码
     * @return mixed
     */
    abstract function getTradeCode();

    private $AGREE_NO;


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
}