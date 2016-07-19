<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class PushObjectCacheRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "PushObjectCache");
	}

	private  $ownerId;

	private  $securityToken;

	private  $objectPath;

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

	public function getObjectPath() {
		return $this->objectPath;
	}

	public function setObjectPath($objectPath) {
		$this->objectPath = $objectPath;
		$this->queryParameters["ObjectPath"]=$objectPath;
	}
}