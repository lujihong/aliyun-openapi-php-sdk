<?php

namespace Cdn\Request\V20141111;

/**
 * Request of SetLiveStreamsNotifyUrlConfig
 *
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getNotifyUrl()
 * @method string getOwnerId()
 */
class SetLiveStreamsNotifyUrlConfigRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Cdn',
            '2014-11-11',
            'SetLiveStreamsNotifyUrlConfig'
        );
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $notifyUrl
     *
     * @return $this
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->requestParameters['NotifyUrl'] = $notifyUrl;
        $this->queryParameters['NotifyUrl'] = $notifyUrl;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }
}
