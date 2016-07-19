<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class AddCdnDomainRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "AddCdnDomain");
	}

	private  $ownerId;

	private  $ownerAccount;

	private  $securityToken;

	private  $domainName;

	private  $cdnType;

	private  $sourceType;

	private  $sources;

	private  $sourcePort;

	private  $serverCertificate;

	private  $privateKey;

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
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

	public function getCdnType() {
		return $this->cdnType;
	}

	public function setCdnType($cdnType) {
		$this->cdnType = $cdnType;
		$this->queryParameters["CdnType"]=$cdnType;
	}

	public function getSourceType() {
		return $this->sourceType;
	}

	public function setSourceType($sourceType) {
		$this->sourceType = $sourceType;
		$this->queryParameters["SourceType"]=$sourceType;
	}

	public function getSources() {
		return $this->sources;
	}

	public function setSources($sources) {
		$this->sources = $sources;
		$this->queryParameters["Sources"]=$sources;
	}

	public function getSourcePort() {
		return $this->sourcePort;
	}

	public function setSourcePort($sourcePort) {
		$this->sourcePort = $sourcePort;
		$this->queryParameters["SourcePort"]=$sourcePort;
	}

	public function getServerCertificate() {
		return $this->serverCertificate;
	}

	public function setServerCertificate($serverCertificate) {
		$this->serverCertificate = $serverCertificate;
		$this->queryParameters["ServerCertificate"]=$serverCertificate;
	}

	public function getPrivateKey() {
		return $this->privateKey;
	}

	public function setPrivateKey($privateKey) {
		$this->privateKey = $privateKey;
		$this->queryParameters["PrivateKey"]=$privateKey;
	}
}