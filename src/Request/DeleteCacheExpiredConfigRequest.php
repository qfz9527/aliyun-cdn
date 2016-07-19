<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class DeleteCacheExpiredConfigRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "DeleteCacheExpiredConfig");
	}

	private  $ownerId;

	private  $securityToken;

	private  $domainName;

	private  $cacheType;

	private  $configID;

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

	public function getCacheType() {
		return $this->cacheType;
	}

	public function setCacheType($cacheType) {
		$this->cacheType = $cacheType;
		$this->queryParameters["CacheType"]=$cacheType;
	}

	public function getConfigID() {
		return $this->configID;
	}

	public function setConfigID($configID) {
		$this->configID = $configID;
		$this->queryParameters["ConfigID"]=$configID;
	}
}