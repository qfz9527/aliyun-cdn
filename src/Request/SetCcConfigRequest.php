<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class SetCcConfigRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "SetCcConfig");
	}

	private  $ownerId;

	private  $securityToken;

	private  $domainName;

	private  $enable;

	private  $allowIps;

	private  $blockIps;

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

	public function getEnable() {
		return $this->enable;
	}

	public function setEnable($enable) {
		$this->enable = $enable;
		$this->queryParameters["Enable"]=$enable;
	}

	public function getAllowIps() {
		return $this->allowIps;
	}

	public function setAllowIps($allowIps) {
		$this->allowIps = $allowIps;
		$this->queryParameters["AllowIps"]=$allowIps;
	}

	public function getBlockIps() {
		return $this->blockIps;
	}

	public function setBlockIps($blockIps) {
		$this->blockIps = $blockIps;
		$this->queryParameters["BlockIps"]=$blockIps;
	}
}