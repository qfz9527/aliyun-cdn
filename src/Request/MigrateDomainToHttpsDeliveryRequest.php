<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class MigrateDomainToHttpsDeliveryRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "MigrateDomainToHttpsDelivery");
	}

	private  $ownerId;

	private  $ownerAccount;

	private  $securityToken;

	private  $domainName;

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