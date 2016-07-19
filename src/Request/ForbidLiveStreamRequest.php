<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class ForbidLiveStreamRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "ForbidLiveStream");
	}

	private  $ownerId;

	private  $securityToken;

	private  $domainName;

	private  $liveStreamType;

	private  $appName;

	private  $streamName;

	private  $resumeTime;

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

	public function getLiveStreamType() {
		return $this->liveStreamType;
	}

	public function setLiveStreamType($liveStreamType) {
		$this->liveStreamType = $liveStreamType;
		$this->queryParameters["LiveStreamType"]=$liveStreamType;
	}

	public function getAppName() {
		return $this->appName;
	}

	public function setAppName($appName) {
		$this->appName = $appName;
		$this->queryParameters["AppName"]=$appName;
	}

	public function getStreamName() {
		return $this->streamName;
	}

	public function setStreamName($streamName) {
		$this->streamName = $streamName;
		$this->queryParameters["StreamName"]=$streamName;
	}

	public function getResumeTime() {
		return $this->resumeTime;
	}

	public function setResumeTime($resumeTime) {
		$this->resumeTime = $resumeTime;
		$this->queryParameters["ResumeTime"]=$resumeTime;
	}
}