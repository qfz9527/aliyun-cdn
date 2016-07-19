<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class SetFileCacheExpiredConfigRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "SetFileCacheExpiredConfig");
	}

	private  $ownerId;

	private  $securityToken;

	private  $domainName;

	private  $cacheContent;

	private  $tTL;

	private  $weight;

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

	public function getCacheContent() {
		return $this->cacheContent;
	}

	public function setCacheContent($cacheContent) {
		$this->cacheContent = $cacheContent;
		$this->queryParameters["CacheContent"]=$cacheContent;
	}

	public function getTTL() {
		return $this->tTL;
	}

	public function setTTL($tTL) {
		$this->tTL = $tTL;
		$this->queryParameters["TTL"]=$tTL;
	}

	public function getWeight() {
		return $this->weight;
	}

	public function setWeight($weight) {
		$this->weight = $weight;
		$this->queryParameters["Weight"]=$weight;
	}
}