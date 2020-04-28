<?php
namespace Com\Pdd\Pop\Sdk\Api\Request;

use Com\Pdd\Pop\Sdk\PopBaseHttpRequest;
use Com\Pdd\Pop\Sdk\PopBaseJsonEntity;

class PddLogisticsSecondaryCityGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "ship_id")
	*/
	private $shipId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "ship_id", $this->shipId);

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
		return "pdd.logistics.secondary.city.get";
	}

	public function setShipId($shipId)
	{
		$this->shipId = $shipId;
	}

}
