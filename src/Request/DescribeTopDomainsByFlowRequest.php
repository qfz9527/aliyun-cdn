<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class DescribeTopDomainsByFlowRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "DescribeTopDomainsByFlow");
	}

	private  $ownerId;

	private  $securityToken;

	private  $startTime;

	private  $endTime;

	private  $limit;

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getLimit() {
		return $this->limit;
	}

	public function setLimit($limit) {
		$this->limit = $limit;
		$this->queryParameters["Limit"]=$limit;
	}
}