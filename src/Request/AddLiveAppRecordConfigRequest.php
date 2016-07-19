<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class AddLiveAppRecordConfigRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "AddLiveAppRecordConfig");
	}

	private  $ownerId;

	private  $securityToken;

	private  $domainName;

	private  $appName;

	private  $ossEndpoint;

	private  $ossBucket;

	private  $ossObjectPrefix;

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

	public function getAppName() {
		return $this->appName;
	}

	public function setAppName($appName) {
		$this->appName = $appName;
		$this->queryParameters["AppName"]=$appName;
	}

	public function getOssEndpoint() {
		return $this->ossEndpoint;
	}

	public function setOssEndpoint($ossEndpoint) {
		$this->ossEndpoint = $ossEndpoint;
		$this->queryParameters["OssEndpoint"]=$ossEndpoint;
	}

	public function getOssBucket() {
		return $this->ossBucket;
	}

	public function setOssBucket($ossBucket) {
		$this->ossBucket = $ossBucket;
		$this->queryParameters["OssBucket"]=$ossBucket;
	}

	public function getOssObjectPrefix() {
		return $this->ossObjectPrefix;
	}

	public function setOssObjectPrefix($ossObjectPrefix) {
		$this->ossObjectPrefix = $ossObjectPrefix;
		$this->queryParameters["OssObjectPrefix"]=$ossObjectPrefix;
	}
}