<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class ModifyCdnDomainRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "ModifyCdnDomain");
	}

	private  $ownerId;

	private  $securityToken;

	private  $domainName;

	private  $sourceType;

	private  $sourcePort;

	private  $sources;

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

	public function getSourceType() {
		return $this->sourceType;
	}

	public function setSourceType($sourceType) {
		$this->sourceType = $sourceType;
		$this->queryParameters["SourceType"]=$sourceType;
	}

	public function getSourcePort() {
		return $this->sourcePort;
	}

	public function setSourcePort($sourcePort) {
		$this->sourcePort = $sourcePort;
		$this->queryParameters["SourcePort"]=$sourcePort;
	}

	public function getSources() {
		return $this->sources;
	}

	public function setSources($sources) {
		$this->sources = $sources;
		$this->queryParameters["Sources"]=$sources;
	}
}