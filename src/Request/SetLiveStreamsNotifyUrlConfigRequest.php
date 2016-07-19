<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class SetLiveStreamsNotifyUrlConfigRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "SetLiveStreamsNotifyUrlConfig");
	}

	private  $ownerId;

	private  $securityToken;

	private  $domainName;

	private  $notifyUrl;

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

	public function getNotifyUrl() {
		return $this->notifyUrl;
	}

	public function setNotifyUrl($notifyUrl) {
		$this->notifyUrl = $notifyUrl;
		$this->queryParameters["NotifyUrl"]=$notifyUrl;
	}
}