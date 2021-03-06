<?php
namespace Aliyun\Cdn\Request;

use Aliyun\Core\RpcAcsRequest;

class DeleteLiveStreamTranscodeRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cdn", "2014-11-11", "DeleteLiveStreamTranscode");
	}

	private  $ownerId;

	private  $ownerAccount;

	private  $securityToken;

	private  $domain;

	private  $template;

	private  $app;

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getDomain() {
		return $this->domain;
	}

	public function setDomain($domain) {
		$this->domain = $domain;
		$this->queryParameters["Domain"]=$domain;
	}

	public function getTemplate() {
		return $this->template;
	}

	public function setTemplate($template) {
		$this->template = $template;
		$this->queryParameters["Template"]=$template;
	}

	public function getApp() {
		return $this->app;
	}

	public function setApp($app) {
		$this->app = $app;
		$this->queryParameters["App"]=$app;
	}
}