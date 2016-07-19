<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class SetDomainServerCertificateRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "SetDomainServerCertificate");
	}

	private  $ownerId;

	private  $securityToken;

	private  $domainName;

	private  $serverCertificateStatus;

	private  $serverCertificate;

	private  $privateKey;

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

	public function getServerCertificateStatus() {
		return $this->serverCertificateStatus;
	}

	public function setServerCertificateStatus($serverCertificateStatus) {
		$this->serverCertificateStatus = $serverCertificateStatus;
		$this->queryParameters["ServerCertificateStatus"]=$serverCertificateStatus;
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