<?php
namespace Com\Pdd\Pop\Sdk\Api\Request;

use Com\Pdd\Pop\Sdk\PopBaseHttpRequest;
use Com\Pdd\Pop\Sdk\PopBaseJsonEntity;

class PddLogisticsCoTrackNotifyRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "data")
	*/
	private $data;

	/**
	* @JsonProperty(String, "ship_id")
	*/
	private $shipId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "data", $this->data);
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
		return "pdd.logistics.co.track.notify";
	}

	public function setData($data)
	{
		$this->data = $data;
	}

	public function setShipId($shipId)
	{
		$this->shipId = $shipId;
	}

}
