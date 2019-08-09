<?php

namespace Omnipay\Faspay\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RequestInterface;

/**
 * Payment Channel Inquiry
 * https://faspay.co.id/docs/index-en-business.html?json#payment-channel-inquiry
 */
class ChannelResponse extends AbstractResponse
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

    public function getData()
    {
        if (isset($this->data['payment_channel']) && !empty($this->data['payment_channel'])) {
            return $this->data['payment_channel'];
        }
    	return null;
    }
}
