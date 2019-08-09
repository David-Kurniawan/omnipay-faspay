<?php

namespace Omnipay\Faspay\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RequestInterface;

/**
 * Post Data
 * https://faspay.co.id/docs/index-en-business.html?json#post-data
 */
class PurchaseResponse extends AbstractResponse
{
    public function __construct(RequestInterface $request, $data)
    {
    	$this->data = $data;
        return;
    }

    public function isSuccessful()
    {
        if (isset($this->data['response_code']) && $this->data['response_code'] === '00') {
            return true;
        }
        return false;
    }

    public function getMessage()
    {
        if (!$this->isSuccessful() && isset($this->data['response_desc'])) {
            return $this->data['response_code'] . ': ' . $this->data['response_desc'];
        }
        return null;
    }

    public function isRedirect()
    {
        return true;
    }

    public function getRedirectUrl()
    {
        return isset($this->data['redirect_url']) ? $this->data['redirect_url'] : null;
    }

    public function getRedirectMethod()
    {
        return 'GET';
    }

    public function getRedirectData()
    {
        return null;
    }
}
