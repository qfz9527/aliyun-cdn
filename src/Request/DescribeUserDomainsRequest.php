<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class DescribeUserDomainsRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "DescribeUserDomains");
	}

	private  $ownerId;

	private  $securityToken;

	private  $pageSize;

	private  $pageNumber;

	private  $domainName;

	private  $domainStatus;

	private  $domainSearchType;

	private  $sources;

	private  $cdnType;

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

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getDomainStatus() {
		return $this->domainStatus;
	}

	public function setDomainStatus($domainStatus) {
		$this->domainStatus = $domainStatus;
		$this->queryParameters["DomainStatus"]=$domainStatus;
	}

	public function getDomainSearchType() {
		return $this->domainSearchType;
	}

	public function setDomainSearchType($domainSearchType) {
		$this->domainSearchType = $domainSearchType;
		$this->queryParameters["DomainSearchType"]=$domainSearchType;
	}

	public function getSources() {
		return $this->sources;
	}

	public function setSources($sources) {
		$this->sources = $sources;
		$this->queryParameters["Sources"]=$sources;
	}

	public function getCdnType() {
		return $this->cdnType;
	}

	public function setCdnType($cdnType) {
		$this->cdnType = $cdnType;
		$this->queryParameters["CdnType"]=$cdnType;
	}
}