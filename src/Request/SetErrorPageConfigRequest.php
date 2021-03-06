<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class SetErrorPageConfigRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "SetErrorPageConfig");
	}

	private  $ownerId;

	private  $securityToken;

	private  $domainName;

	private  $pageType;

	private  $customPageUrl;

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

	public function getPageType() {
		return $this->pageType;
	}

	public function setPageType($pageType) {
		$this->pageType = $pageType;
		$this->queryParameters["PageType"]=$pageType;
	}

	public function getCustomPageUrl() {
		return $this->customPageUrl;
	}

	public function setCustomPageUrl($customPageUrl) {
		$this->customPageUrl = $customPageUrl;
		$this->queryParameters["CustomPageUrl"]=$customPageUrl;
	}
}