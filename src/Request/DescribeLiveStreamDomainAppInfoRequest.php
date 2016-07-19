<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class DescribeLiveStreamDomainAppInfoRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "DescribeLiveStreamDomainAppInfo");
	}

	private  $ownerId;

	private  $securityToken;

	private  $appDomain;

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

	public function getAppDomain() {
		return $this->appDomain;
	}

	public function setAppDomain($appDomain) {
		$this->appDomain = $appDomain;
		$this->queryParameters["AppDomain"]=$appDomain;
	}
}