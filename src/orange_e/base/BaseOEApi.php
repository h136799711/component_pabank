<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-03-01 10:24
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\orange_e\base;


use by\component\pabank\B2biFrontMachine\B2BiProxy;
use by\component\pabank\base\BaseApi;
use by\component\pabank\config\BaseConfig;

class BaseOEApi extends BaseApi
{
    protected $proxy;

    public function __construct(BaseConfig $config)
    {
        $this->proxy = new B2BiProxy($config->getB2biProxyUri());
    }

}