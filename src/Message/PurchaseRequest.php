<?php

namespace Omnipay\Faspay\Message;

/**
 * Post Data
 * https://faspay.co.id/docs/index-en-business.html?json#post-data
 */
class PurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        $this->purchaseGuardParameters();
        $data = $this->getPurchaseParameters();
        return $data;
    }

    public function sendData($data)
    {
        $httpResponse = $this->sendRequest($data);
        return $this->response = new PurchaseResponse($this, $httpResponse);
    }

    public function getEndpoint()
    {
        return parent::getEndpoint() . '/cvr/300011/10';
    }
}
