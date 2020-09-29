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
    const DEV_URL = 'https://dev.faspay.co.id/pws/100003/0830000010100000/';
    const LIVE_URL = 'https://web.faspay.co.id/pws/100003/2830000010100000/';

    public function __construct(RequestInterface $request, $data, $userId, $password, $merchantId, $testMode)
    {
        parent::__construct($request, $data);
        
        if (!is_array($data)) {
            $this->data = json_decode(trim($data), true);
        }

        $this->userId = $userId;
        $this->password = $password;
        $this->merchantId = $merchantId;
        $this->testMode = $testMode;
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
        if ($this->isSuccessful()) {
            $url = $this->getEndpoint().$this->createSignature().'?'.$this->buildRedirectQuery();

            return $url;
        }

        return;
    }

    public function getRedirectMethod()
    {
        return 'GET';
    }

    public function getRedirectData()
    {
        return $this->data;
    }

    public function createSignature()
    {
        return sha1(md5(($this->userId.$this->password.$this->data['bill_no'])));
    }

    public function buildRedirectQuery()
    {
        $datas = array();
        $datas['trx_id'] = $this->data['trx_id'];
        $datas['merchant_id'] = $this->merchantId;
        $datas['bill_no'] = $this->data['bill_no'];

        return http_build_query($datas);
    }

    public function getEndpoint()
    {
        if ($this->testMode) {
            return self::DEV_URL;
        }

        return self::LIVE_URL;
    }
}
