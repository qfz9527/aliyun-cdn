<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class SetForwardSchemeConfigRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "SetForwardSchemeConfig");
	}

	private  $ownerId;

	private  $securityToken;

	private  $enable;

	private  $domainName;

	private  $schemeOrigin;

	private  $schemeOriginPort;

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

	public function getEnable() {
		return $this->enable;
	}

	public function setEnable($enable) {
		$this->enable = $enable;
		$this->queryParameters["Enable"]=$enable;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getSchemeOrigin() {
		return $this->schemeOrigin;
	}

	public function setSchemeOrigin($schemeOrigin) {
		$this->schemeOrigin = $schemeOrigin;
		$this->queryParameters["SchemeOrigin"]=$schemeOrigin;
	}

	public function getSchemeOriginPort() {
		return $this->schemeOriginPort;
	}

	public function setSchemeOriginPort($schemeOriginPort) {
		$this->schemeOriginPort = $schemeOriginPort;
		$this->queryParameters["SchemeOriginPort"]=$schemeOriginPort;
	}
}