<?php

namespace Omnipay\Faspay\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RequestInterface;

/**
 * Payment Notification
 * https://faspay.co.id/docs/index-en-business.html?json#payment-notification
 */
class CompletePurchaseResponse extends AbstractResponse
{
    public function __construct(RequestInterface $request, $data)
    {
        parent::__construct($request, $data);
        
        if (!is_array($data)) {
            $this->data = json_decode(trim($data), true);
        }
    }

    public function isSuccessful()
    {
        if ($this->isValidSignature()) {
            return true;
        }
        return false;
    }

    public function getTrxId()
    {
        return $this->data['trx_id'];
    }

    public function getBillNo()
    {
        return $this->data['bill_no'];
    }

    public function getPaymentStatusCode()
    {
        return $this->data['payment_status_code'];
    }

    public function getMessage()
    {
        if (!$this->isSuccessful() && isset($this->data['payment_status_desc'])) {
            return $this->data['payment_status_code'] . ': ' . $this->data['payment_status_desc'];
        }
        return null;
    }

    public function isValidSignature()
    {
        $val = sha1(md5($this->data['uid'].$this->data['pwd'].$this->data['bill_no'].$this->data['payment_status_code']));
        if ($this->data['signature'] == $val) {
            return true;
        }

        return false;
    }
}
