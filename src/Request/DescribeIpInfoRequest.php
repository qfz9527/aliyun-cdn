<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class DescribeIpInfoRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "DescribeIpInfo");
	}

	private  $ownerId;

	private  $securityToken;

	private  $iP;

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

	public function getIP() {
		return $this->iP;
	}

	public function setIP($iP) {
		$this->iP = $iP;
		$this->queryParameters["IP"]=$iP;
	}
}