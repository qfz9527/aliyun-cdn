<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class DescribeDomainBpsDataRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "DescribeDomainBpsData");
	}

	private  $ownerId;

	private  $securityToken;

	private  $domainName;

	private  $startTime;

	private  $endTime;

	private  $timeMerge;

	private  $locationNameEn;

	private  $ispNameEn;

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

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
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

	public function getTimeMerge() {
		return $this->timeMerge;
	}

	public function setTimeMerge($timeMerge) {
		$this->timeMerge = $timeMerge;
		$this->queryParameters["TimeMerge"]=$timeMerge;
	}

	public function getLocationNameEn() {
		return $this->locationNameEn;
	}

	public function setLocationNameEn($locationNameEn) {
		$this->locationNameEn = $locationNameEn;
		$this->queryParameters["LocationNameEn"]=$locationNameEn;
	}

	public function getIspNameEn() {
		return $this->ispNameEn;
	}

	public function setIspNameEn($ispNameEn) {
		$this->ispNameEn = $ispNameEn;
		$this->queryParameters["IspNameEn"]=$ispNameEn;
	}
}