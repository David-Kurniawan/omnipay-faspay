<?php

namespace Omnipay\Faspay\Message;

/**
 * Post Data
 * https://faspay.co.id/docs/index-en-business.html?json#post-data
 */
class PurchaseRequest extends AbstractRequest
{
    public function sendData($data)
    {
        $ch = curl_init($this->getEndpoint());
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                              
        $httpResponse = curl_exec($ch);

        return $this->response = new PurchaseResponse($this, $httpResponse, $this->getUserId(), $this->getPassword(), $this->getMerchantId(), $this->getTestMode());
    }

    public function getData()
    {
        $this->purchaseGuardParameters();
        $data = $this->getPurchaseParameters();
        return $data;
    }

    public function getEndpoint()
    {
        return parent::getEndpoint() . '/cvr/300011/10';
    }
}
