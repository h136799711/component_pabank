<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-02-09 14:47
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\base;

use by\component\pabank\helper\XmlHelper;
use by\infrastructure\helper\Object2DataArrayHelper;

/**
 * Class BaseResp
 * 响应基础
 * @package by\component\base
 */
abstract class BaseResp
{
    private $header;

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param mixed $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * 转化为xml
     * @param string $root
     * @param bool $includeXmlHead 是否包含xml头
     * @param string $encoding 编码
     * @return string
     * @throws \ReflectionException
     */
    public function toXml($root = 'Result', $includeXmlHead = true, $encoding = "utf-8")
    {
        return XmlHelper::getXmlFromObject($this, $root, $includeXmlHead, $encoding);
    }

    /**
     * 从xml初始化数据
     * @param $xml
     * @throws \ReflectionException
     */
    public function fromXml($xml)
    {
        XmlHelper::setObjectFromXml($this, $xml);
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(Object2DataArrayHelper::getDataArrayFrom($this));
    }
}