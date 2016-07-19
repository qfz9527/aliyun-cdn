<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class SetOssLogConfigRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "SetOssLogConfig");
	}

	private  $ownerId;

	private  $securityToken;

	private  $enable;

	private  $bucket;

	private  $prefix;

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

	public function getEnable() {
		return $this->enable;
	}

	public function setEnable($enable) {
		$this->enable = $enable;
		$this->queryParameters["Enable"]=$enable;
	}

	public function getBucket() {
		return $this->bucket;
	}

	public function setBucket($bucket) {
		$this->bucket = $bucket;
		$this->queryParameters["Bucket"]=$bucket;
	}

	public function getPrefix() {
		return $this->prefix;
	}

	public function setPrefix($prefix) {
		$this->prefix = $prefix;
		$this->queryParameters["Prefix"]=$prefix;
	}
}