<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class PurgeObjectCachesRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "PurgeObjectCaches");
	}

	private  $ownerId;

	private  $securityToken;

	private  $domainName;

	private  $objectPath;

	private  $objectType;

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

	public function getObjectPath() {
		return $this->objectPath;
	}

	public function setObjectPath($objectPath) {
		$this->objectPath = $objectPath;
		$this->queryParameters["ObjectPath"]=$objectPath;
	}

	public function getObjectType() {
		return $this->objectType;
	}

	public function setObjectType($objectType) {
		$this->objectType = $objectType;
		$this->queryParameters["ObjectType"]=$objectType;
	}
}