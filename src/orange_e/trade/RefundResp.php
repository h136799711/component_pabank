<?php
/**
 * Created by PhpStorm.
 * User: itboye
 * Date: 2018/3/8
 * Time: 上午11:06
 */

namespace by\component\pabank\orange_e\trade;


use by\component\pabank\base\BaseResp;

class RefundResp extends BaseResp
{

    public function __construct()
    {
    }

    private $thirdVoucher;
    private $bussSeqNo;

    /**
     * @return mixed
     */
    public function getThirdVoucher()
    {
        return $this->thirdVoucher;
    }

    /**
     * @param mixed $thirdVoucher
     */
    public function setThirdVoucher($thirdVoucher)
    {
        $this->thirdVoucher = $thirdVoucher;
    }

    /**
     * @return mixed
     */
    public function getBussSeqNo()
    {
        return $this->bussSeqNo;
    }

    /**
     * @param mixed $bussSeqNo
     */
    public function setBussSeqNo($bussSeqNo)
    {
        $this->bussSeqNo = $bussSeqNo;
    }
}