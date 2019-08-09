<?php

namespace Omnipay\Faspay\Message;

abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{
    protected $isProduction = false;
    protected $liveEndpoint = 'https://web.faspay.co.id';
    protected $testEndpoint = 'https://dev.faspay.co.id';
    protected $userid = 'YOUR_USER_ID';
    protected $password = 'YOUR_PASSWORD';

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

    public function getBillNo()
    {
        return $this->getParameter('bill_no');
    }

    public function setBillNo($value)
    {
        return $this->setParameter('bill_no', $value);
    }

    public function getBillDate()
    {
        return $this->getParameter('bill_date');
    }

    public function setBillDate($value)
    {
        return $this->setParameter('bill_date', $value);
    }

    public function getBillExpired()
    {
        return $this->getParameter('bill_expired');
    }

    public function setBillExpired($value)
    {
        return $this->setParameter('bill_expired', $value);
    }

    public function getBillDesc()
    {
        return $this->getParameter('bill_desc');
    }

    public function setBillDesc($value)
    {
        return $this->setParameter('bill_desc', $value);
    }

    public function getBillCurrency()
    {
        return $this->getParameter('bill_currency');
    }

    public function setBillCurrency($value)
    {
        return $this->setParameter('bill_currency', $value);
    }

    public function getBillGross()
    {
        return $this->getParameter('bill_gross');
    }

    public function setBillGross($value)
    {
        return $this->setParameter('bill_gross', $value);
    }

    public function getBillMiscfee()
    {
        return $this->getParameter('bill_miscfee');
    }

    public function setBillMiscfee($value)
    {
        return $this->setParameter('bill_miscfee', $value);
    }

    public function getBillTotal()
    {
        return $this->getParameter('bill_total');
    }

    public function setBillTotal($value)
    {
        return $this->setParameter('bill_total', $value);
    }

    public function getBillReff()
    {
        return $this->getParameter('bill_reff');
    }

    public function setBillReff($value)
    {
        return $this->setParameter('bill_reff', $value);
    }

    public function getCustNo()
    {
        return $this->getParameter('cust_no');
    }

    public function setCustNo($value)
    {
        return $this->setParameter('cust_no', $value);
    }

    public function getCustName()
    {
        return $this->getParameter('cust_name');
    }

    public function setCustName($value)
    {
        return $this->setParameter('cust_name', $value);
    }

    public function getPaymentChannel()
    {
        return $this->getParameter('payment_channel');
    }

    public function setPaymentChannel($value)
    {
        return $this->setParameter('payment_channel', $value);
    }

    public function getPayType()
    {
        return $this->getParameter('pay_type');
    }

    public function setPayType($value)
    {
        return $this->setParameter('pay_type', $value);
    }

    public function getTerminal()
    {
        return $this->getParameter('terminal');
    }

    public function setTerminal($value)
    {
        return $this->setParameter('terminal', $value);
    }

    public function getBillingName()
    {
        return $this->getParameter('billing_name');
    }

    public function setBillingName($value)
    {
        return $this->setParameter('billing_name', $value);
    }

    public function getBillingLastname()
    {
        return $this->getParameter('billing_lastname');
    }

    public function setBillingLastname($value)
    {
        return $this->setParameter('billing_lastname', $value);
    }

    public function getBillingAddress()
    {
        return $this->getParameter('billing_address');
    }

    public function setBillingAddress($value)
    {
        return $this->setParameter('billing_address', $value);
    }

    public function getBillingAddressCity()
    {
        return $this->getParameter('billing_address_city');
    }

    public function setBillingAddressCity($value)
    {
        return $this->setParameter('billing_address_city', $value);
    }

    public function getBillingAddressRegion()
    {
        return $this->getParameter('billing_address_region');
    }

    public function setBillingAddressRegion($value)
    {
        return $this->setParameter('billing_address_region', $value);
    }

    public function getBillingAddressState()
    {
        return $this->getParameter('billing_address_state');
    }

    public function setBillingAddressState($value)
    {
        return $this->setParameter('billing_address_state', $value);
    }

    public function getBillingAddressPoscode()
    {
        return $this->getParameter('billing_address_poscode');
    }

    public function setBillingAddressPoscode($value)
    {
        return $this->setParameter('billing_address_poscode', $value);
    }

    public function getBillingMsisdn()
    {
        return $this->getParameter('billing_msisdn');
    }

    public function setBillingMsisdn($value)
    {
        return $this->setParameter('billing_msisdn', $value);
    }

    public function getBillingAddressCountryCode()
    {
        return $this->getParameter('billing_address_country_code');
    }

    public function setBillingAddressCountryCode($value)
    {
        return $this->setParameter('billing_address_country_code', $value);
    }

    public function getReceiverNameForShipping()
    {
        return $this->getParameter('receiver_name_for_shipping');
    }

    public function setReceiverNameForShipping($value)
    {
        return $this->setParameter('receiver_name_for_shipping', $value);
    }

    public function getShippingLastname()
    {
        return $this->getParameter('shipping_lastname');
    }

    public function setShippingLastname($value)
    {
        return $this->setParameter('shipping_lastname', $value);
    }

    public function getShippingAddress()
    {
        return $this->getParameter('shipping_address');
    }

    public function setShippingAddress($value)
    {
        return $this->setParameter('shipping_address', $value);
    }

    public function getShippingAddressCity()
    {
        return $this->getParameter('shipping_address_city');
    }

    public function setShippingAddressCity($value)
    {
        return $this->setParameter('shipping_address_city', $value);
    }

    public function getShippingAddressRegion()
    {
        return $this->getParameter('shipping_address_region');
    }

    public function setShippingAddressRegion($value)
    {
        return $this->setParameter('shipping_address_region', $value);
    }

    public function getShippingAddressState()
    {
        return $this->getParameter('shipping_address_state');
    }

    public function setShippingAddressState($value)
    {
        return $this->setParameter('shipping_address_state', $value);
    }

    public function getShippingAddressPoscode()
    {
        return $this->getParameter('shipping_address_poscode');
    }

    public function setShippingAddressPoscode($value)
    {
        return $this->setParameter('shipping_address_poscode', $value);
    }

    public function getShippingAddressCountryCode()
    {
        return $this->getParameter('shipping_address_country_code');
    }

    public function setShippingAddressCountryCode($value)
    {
        return $this->setParameter('shipping_address_country_code', $value);
    }

    public function getShippingMsisdn()
    {
        return $this->getParameter('shipping_msisdn');
    }

    public function setShippingMsisdn($value)
    {
        return $this->setParameter('shipping_msisdn', $value);
    }

    public function getItem()
    {
        return $this->getParameter('item');
    }

    public function setItem($value)
    {
        return $this->setParameter('item', $value);
    }

    public function getMsisdn()
    {
        return $this->getParameter('msisdn');
    }

    public function setMsisdn($value)
    {
        return $this->setParameter('msisdn', $value);
    }

    public function getEmail()
    {
        return $this->getParameter('email');
    }

    public function setEmail($value)
    {
        return $this->setParameter('email', $value);
    }

    protected function guardParameters()
    {
        $this->validate(
            'merchant',
            'merchant_id',
            'signature'
        );
    }

    protected function purchaseGuardParameters()
    {
        $this->validate(
            'merchant',
            'merchant_id',
            'signature',
            'bill_no',
            'bill_date',
            'bill_expired',
            'bill_desc',
            'bill_currency',
            'bill_total',
            'payment_channel',
            'pay_type',
            'cust_no',
            'cust_name',
            'msisdn',
            'email',
            'terminal'
        );
    }

    public function getPurchaseParameters()
    {
        $settings = [];
        $settings['request'] = 'Post Data Transaction';
        $settings['merchant'] = $this->getMerchant();
        $settings['merchant_id'] = $this->getMerchantId();
        $settings['signature'] = $this->createSignature('payment', $this->getBillNo());
        $settings['bill_no'] = $this->getBillNo();
        $settings['bill_reff'] = $this->getBillReff();
        $settings['bill_date'] = $this->getBillDate();
        $settings['bill_expired'] = $this->getBillExpired();
        $settings['bill_desc'] = $this->getBillDesc();
        $settings['bill_currency'] = $this->getBillCurrency();
        $settings['bill_gross'] = $this->getBillGross();
        $settings['bill_miscfee'] = $this->getBillMiscfee();
        $settings['bill_total'] = $this->getBillTotal();
        $settings['cust_no'] = $this->getCustNo();
        $settings['cust_name'] = $this->getCustName();
        $settings['payment_channel'] = $this->getPaymentChannel();
        $settings['pay_type'] = $this->getPayType();
        $settings['bank_userid'] = '';
        $settings['msisdn'] = $this->getMsisdn();
        $settings['email'] = $this->getEmail();
        $settings['terminal'] = $this->getTerminal();
        $settings['billing_name'] = $this->getBillingName();
        $settings['billing_lastname'] = $this->getBillingLastname();
        $settings['billing_address'] = $this->getBillingAddress();
        $settings['billing_address_city'] = $this->getBillingAddressCity();
        $settings['billing_address_region'] = $this->getBillingAddressRegion();
        $settings['billing_address_state'] = $this->getBillingAddressState();
        $settings['billing_address_poscode'] = $this->getBillingAddressPoscode();
        $settings['billing_msisdn'] = $this->getBillingMsisdn();
        $settings['billing_address_country_code'] = $this->getBillingAddressCountryCode();
        $settings['receiver_name_for_shipping'] = $this->getReceiverNameForShipping();
        $settings['shipping_lastname'] = $this->getShippingLastname();
        $settings['shipping_address'] = $this->getShippingAddress();
        $settings['shipping_address_city'] = $this->getShippingAddressCity();
        $settings['shipping_address_region'] = $this->getShippingAddressRegion();
        $settings['shipping_address_state'] = $this->getShippingAddressState();
        $settings['shipping_address_poscode'] = $this->getShippingAddressPoscode();
        $settings['shipping_msisdn'] = $this->getShippingMsisdn();
        $settings['shipping_address_country_code'] = $this->getShippingAddressCountryCode();
        $settings['item'] = $this->getItem();
        $settings['reserve1'] = '';
        $settings['reserve2'] = '';
        return $settings;
    }

    public function getDefaultParameters()
    {
        $settings = [];
        $settings['merchant'] = $this->getMerchant();
        $settings['merchant_id'] = $this->getMerchantId();
        $settings['signature'] = $this->createSignature('channel');
        return $settings;
    }

    protected function createSignature($type, $billno = null, $status_code = null)
    {
        if ($type === 'channel') {
            return sha1(md5($this->userid.$this->password));
        } elseif ($type === 'payment') {
            return sha1(md5($this->userid.$this->password.$billno));
        }

        return null;
    }

    public function sendRequest($data)
    {
        $ch = curl_init($this->getEndpoint());
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                              
        $result = curl_exec($ch);
        $result = json_decode($result, true);
        
        return $result;
    }

    public function getHttpMethod()
    {
        return 'POST';
    }

    public function getEndpoint()
    {
        if ($this->isProduction) {
            return $this->liveEndpoint;
        }
        return $this->testEndpoint;
    }
}