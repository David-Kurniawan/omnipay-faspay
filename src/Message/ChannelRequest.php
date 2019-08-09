<?php

namespace Omnipay\Faspay\Message;


/**
 * Payment Channel Inquiry
 * https://faspay.co.id/docs/index-en-business.html?json#payment-channel-inquiry
 */
class ChannelRequest extends AbstractRequest
{
    public function getData()
    {
        $this->guardParameters();
        $data = $this->getDefaultParameters();

        return $data;
    }

    public function sendData($data)
    {
        $httpResponse = $this->sendRequest($data);
        return $this->response = new ChannelResponse($this, $httpResponse);
    }

    public function getEndpoint()
    {
        return parent::getEndpoint() . '/cvr/100001/10';
    }
}
