<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class DescribeLiveStreamTranscodeInfoRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "DescribeLiveStreamTranscodeInfo");
	}

	private  $ownerId;

	private  $securityToken;

	private  $domainTranscodeName;

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

	public function getDomainTranscodeName() {
		return $this->domainTranscodeName;
	}

	public function setDomainTranscodeName($domainTranscodeName) {
		$this->domainTranscodeName = $domainTranscodeName;
		$this->queryParameters["DomainTranscodeName"]=$domainTranscodeName;
	}
}