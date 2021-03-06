<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class SetHttpHeaderConfigRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "SetHttpHeaderConfig");
	}

	private  $ownerId;

	private  $securityToken;

	private  $domainName;

	private  $headerKey;

	private  $headerValue;

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

	public function getHeaderKey() {
		return $this->headerKey;
	}

	public function setHeaderKey($headerKey) {
		$this->headerKey = $headerKey;
		$this->queryParameters["HeaderKey"]=$headerKey;
	}

	public function getHeaderValue() {
		return $this->headerValue;
	}

	public function setHeaderValue($headerValue) {
		$this->headerValue = $headerValue;
		$this->queryParameters["HeaderValue"]=$headerValue;
	}
}