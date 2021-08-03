<?php
namespace Com\Pdd\Pop\Sdk\Api\Request;

use Com\Pdd\Pop\Sdk\PopBaseHttpRequest;
use Com\Pdd\Pop\Sdk\PopBaseJsonEntity;

class PddDdkWeappQrcodeUrlGenRequest extends PopBaseHttpRequest
{
    public function __construct()
    {

    }
    /*
     * @jsonProperty(String, "cash_gift_id")
     */
    private $cashGiftId;

    /**
     * @JsonProperty(String, "custom_parameters")
     */
    private $customParameters;

    /**
     * @JsonProperty(Boolean, "generate_mall_collect_coupon")
     */
    private $generateMallCollectCoupon;

    /**
     * @JsonProperty(List<Long>, "goods_sign_list")
     */
    private $goodsSignList;

    /**
     * @JsonProperty(String, "p_id")
     */
    private $pId;

    /**
     * @JsonProperty(Long, "zs_duo_id")
     */
    private $zsDuoId;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, "cash_gift_id", $this->cashGiftId);
        $this->setUserParam($params, "custom_parameters", $this->customParameters);
        $this->setUserParam($params, "generate_mall_collect_coupon", $this->generateMallCollectCoupon);
        $this->setUserParam($params, "goods_sign_list", $this->goodsSignList);
        $this->setUserParam($params, "p_id", $this->pId);
        $this->setUserParam($params, "zs_duo_id", $this->zsDuoId);

    }

    public function getVersion()
    {
        return "V1";
    }

    public function getDataType()
    {
        return "JSON";
    }

    public function getType()
    {
        return "pdd.ddk.weapp.qrcode.url.gen";
    }

    public function setCashGiftId($cashGiftId)
    {
        $this->cashGiftId = $cashGiftId;
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function setGenerateMallCollectCoupon($generateMallCollectCoupon)
    {
        $this->generateMallCollectCoupon = $generateMallCollectCoupon;
    }

    public function setGoodsSignList($goodsSignList)
    {
        $this->goodsSignList = $goodsSignList;
    }

    public function setPId($pId)
    {
        $this->pId = $pId;
    }

    public function setZsDuoId($zsDuoId)
    {
        $this->zsDuoId = $zsDuoId;
    }

}
