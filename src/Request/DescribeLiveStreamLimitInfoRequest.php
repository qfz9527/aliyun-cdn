<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class DescribeLiveStreamLimitInfoRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "DescribeLiveStreamLimitInfo");
	}

	private  $ownerId;

	private  $securityToken;

	private  $limitDomain;

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

	public function getLimitDomain() {
		return $this->limitDomain;
	}

	public function setLimitDomain($limitDomain) {
		$this->limitDomain = $limitDomain;
		$this->queryParameters["LimitDomain"]=$limitDomain;
	}
}