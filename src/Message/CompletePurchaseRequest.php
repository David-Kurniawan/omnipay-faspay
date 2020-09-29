<?php

namespace Omnipay\Faspay\Message;

/**
 * Payment Notification
 * https://faspay.co.id/docs/index-en-business.html?json#payment-notification
 */
class CompletePurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        $data = json_decode($this->httpRequest->getContent(), true);
        $data['uid'] = $this->getUserId();
        $data['pwd'] = $this->getPassword();
        $this->httpRequest->request->replace(is_array($data) ? $data : array());

        return $this->httpRequest->request->all();
    }

    public function sendData($data)
    {
        return new CompletePurchaseResponse($this, $data);
    }
}
