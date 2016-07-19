<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class SetRefererConfigRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "SetRefererConfig");
	}

	private  $ownerId;

	private  $securityToken;

	private  $domainName;

	private  $referType;

	private  $referList;

	private  $allowEmpty;

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

	public function getReferType() {
		return $this->referType;
	}

	public function setReferType($referType) {
		$this->referType = $referType;
		$this->queryParameters["ReferType"]=$referType;
	}

	public function getReferList() {
		return $this->referList;
	}

	public function setReferList($referList) {
		$this->referList = $referList;
		$this->queryParameters["ReferList"]=$referList;
	}

	public function getAllowEmpty() {
		return $this->allowEmpty;
	}

	public function setAllowEmpty($allowEmpty) {
		$this->allowEmpty = $allowEmpty;
		$this->queryParameters["AllowEmpty"]=$allowEmpty;
	}
}