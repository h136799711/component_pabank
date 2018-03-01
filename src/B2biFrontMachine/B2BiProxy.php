<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-02-11 15:12
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\B2biFrontMachine;


use by\component\pabank\B2biFrontMachine\helper\XmlCurlHelper;

class B2BiProxy
{
    private $proxyUrl;

    public function __construct($proxyUrl)
    {
        $this->proxyUrl = $proxyUrl;
    }

    public function post($xml, $timeout = 90, $url = '') {
        if (empty($url)) {
            $url = $this->proxyUrl;
        }
        $data = $this->getA1001Header().$xml;
        // TODO: 处理中转的错误
        $result =  XmlCurlHelper::postXml($url, $data, $timeout);
        return $result;
    }

    /**
     * A1001报文头添加
     * @return  string
     */
    public function getA1001Header()
    {
        return "";
    }

    public function getError()
    {

    }
}