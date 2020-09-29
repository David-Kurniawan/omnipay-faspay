<?php

namespace Omnipay\Faspay\Message;


/**
 * Payment Channel Inquiry
 * https://faspay.co.id/docs/index-en-business.html?json#payment-channel-inquiry
 */
class ChannelRequest extends AbstractRequest
{
    public function sendData($data)
    {
        $ch = curl_init($this->getEndpoint());
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                              
        $httpResponse = curl_exec($ch);

        return $this->response = new ChannelResponse($this, $httpResponse);
    }

    public function getData()
    {
        $this->channelGuardParameters();
        $data = $this->getDefaultParameters();

        return $data;
    }

    public function getEndpoint()
    {
        return parent::getEndpoint() . '/cvr/100001/10';
    }
}
