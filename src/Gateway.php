<?php

namespace Omnipay\Faspay;

use Omnipay\Common\AbstractGateway;

class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Faspay';
    }

    public function getDefaultParameters()
    {
        return [
            'merchant' => '',
            'merchant_id' => '',
            'signature' => ''
        ];
    }

    public function getMerchant()
    {
        return $this->getParameter('merchant');
    }

    public function setMerchant($merchantName)
    {
        return $this->setParameter('merchant', $merchantName);
    }

    public function getMerchantId()
    {
        return $this->getParameter('merchant_id');
    }

    public function setMerchantId($merchantId)
    {
        return $this->setParameter('merchant_id', $merchantId);
    }

    public function getSignature()
    {
        return $this->getParameter('signature');
    }

    public function setSignature($signature)
    {
        return $this->setParameter('signature', $signature);
    }

    public function channel()
    {
        return $this->createRequest('\Omnipay\Faspay\Message\ChannelRequest', []);
    }

    public function purchase()
    {
        return $this->createRequest('\Omnipay\Faspay\Message\PurchaseRequest', []);
    }

    public function completePurchase()
    {
        return $this->createRequest('\Omnipay\Faspay\Message\CompletePurchaseRequest', []);
    }
}
