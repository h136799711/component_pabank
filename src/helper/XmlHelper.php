<?php
/**
 * 注意：本内容仅限于博也公司内部传阅,禁止外泄以及用于其他的商业目的
 * @author    hebidu<346551990@qq.com>
 * @copyright 2018 www.itboye.com Boye Inc. All rights reserved.
 * @link      http://www.itboye.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * Revision History Version
 ********1.0.0********************
 * file created @ 2018-02-11 13:34
 *********************************
 ********1.0.1********************
 *
 *********************************
 */

namespace by\component\pabank\helper;


class XmlHelper
{
    public static $cacheReflectionCls = [];
    public static $cacheEntityProperty = [];
    public static $cacheClassProperty = [];

    /**
     *
     * @param $instance
     * @param $xml
     * @return mixed
     * @throws \ReflectionException
     */
    public static function setObjectFromXml($instance, $xml)
    {
        $simpleDom = simplexml_load_string($xml);
        $data = json_decode(json_encode($simpleDom), JSON_OBJECT_AS_ARRAY);
        $clsName = get_class($instance);
        $ref = self::getReflectionCls($clsName);
        if (empty($properties)) {
            $properties = self::getAllProperties($ref);
        }
        foreach ($properties as $vo) {
            if ($vo instanceof \ReflectionProperty) {
                $propName = ucfirst($vo->getName());
            } else {
                $propName = ucfirst($vo);
            }

            $key = ucfirst($propName);
            $methodName = 'set' . ucfirst($key);
            if ($ref->hasMethod($methodName)) {
                $method = $ref->getMethod($methodName);
                if ($method->isPublic() && array_key_exists($key, $data)) {
                    $instance->$methodName($data[$key]);
                }
            }
        }

        return $instance;
    }

    /**
     * 从类对象中获取xml
     * @param $instance
     * @param bool $includeXmlHead
     * @param string $root
     * @param string $encoding
     * @return string
     * @throws \ReflectionException
     */
    public static function getXmlFromObject($instance, $includeXmlHead = true, $root = 'Result', $encoding = "GBK")
    {
        $xmlHeader = $includeXmlHead ? "<?xml version=\"1.0\" encoding=\"$encoding\" ?>" : "";
        $tagValue = "";
        $data = self::getData($instance);
        foreach ($data as $key => $val) {
            $tagValue .= self::getTag(ucfirst($key), $val);
        }

        return $xmlHeader.self::getTag($root, $tagValue);
    }

    /**
     * @param $instance
     * @param bool $ignoreNull
     * @return array
     * @throws \ReflectionException
     */
    private static function getData($instance, $ignoreNull = true)
    {
        $clsName = get_class($instance);
        $ref = self::getReflectionCls($clsName);
        $data = [];
        if (empty($properties)) {
            $properties = self::getAllProperties($ref);
        }
        foreach ($properties as $vo) {
            if ($vo instanceof \ReflectionProperty) {
                $propName = ucfirst($vo->getName());
            } else {
                $propName = ucfirst($vo);
            }

            $key = ucfirst($propName);
            $methodName = 'get' . ucfirst($key);
            if ($ref->hasMethod($methodName)) {
                $method = $ref->getMethod($methodName);
                if ($method->isPublic()) {
                    $propValue = $instance->$methodName();
                    if ($ignoreNull && is_null($propValue)) {
                        continue;
                    }
                    $data[$propName] = $propValue;
                }
            }
        }
        return $data;
    }

    /**
     * 返回xml标签
     * @param $tagName
     * @param string $tagValue
     * @return string
     */
    public static function getTag($tagName, $tagValue = "")
    {
        return "<$tagName>$tagValue</$tagName>";
    }

    public static function getAllProperties(\ReflectionClass $refCls)
    {
        $clsName = $refCls->getName();
        $key = str_replace("\\", '_', $clsName);
        if (!array_key_exists($key, self::$cacheClassProperty)) {
            $properties = $refCls->getProperties();
            while (($refCls = $refCls->getParentClass())) {
                $properties = array_merge($refCls->getProperties(), $properties);
            }

            self::$cacheClassProperty[$key] = $properties;
        }

        return self::$cacheClassProperty[$key];
    }

    /**
     * @param $clsName
     * @return \ReflectionClass
     * @throws \ReflectionException
     */
    private static function getReflectionCls($clsName)
    {
        $key = str_replace("\\", '_', $clsName);

        if (!array_key_exists($key, self::$cacheReflectionCls)) {
            self::$cacheReflectionCls[$key] = new \ReflectionClass($clsName);
        }
        return self::$cacheReflectionCls[$key];
    }


}