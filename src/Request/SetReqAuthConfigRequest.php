<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class SetReqAuthConfigRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "SetReqAuthConfig");
	}

	private  $ownerId;

	private  $securityToken;

	private  $domainName;

	private  $authType;

	private  $key1;

	private  $key2;

	private  $timeOut;

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

	public function getAuthType() {
		return $this->authType;
	}

	public function setAuthType($authType) {
		$this->authType = $authType;
		$this->queryParameters["AuthType"]=$authType;
	}

	public function getKey1() {
		return $this->key1;
	}

	public function setKey1($key1) {
		$this->key1 = $key1;
		$this->queryParameters["Key1"]=$key1;
	}

	public function getKey2() {
		return $this->key2;
	}

	public function setKey2($key2) {
		$this->key2 = $key2;
		$this->queryParameters["Key2"]=$key2;
	}

	public function getTimeOut() {
		return $this->timeOut;
	}

	public function setTimeOut($timeOut) {
		$this->timeOut = $timeOut;
		$this->queryParameters["TimeOut"]=$timeOut;
	}
}