<?php

namespace Omnipay\Faspay;

use Omnipay\Tests\GatewayTestCase;

class GatewayTest extends GatewayTestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->gateway = new Gateway($this->getHttpClient(), $this->getHttpRequest());
        $this->gateway->setMerchant('Avana.id');
        $this->gateway->setMerchantId('32495');
    }

    public function testChannel()
    {
        $response = $this->gateway->channel()->send();
        $this->assertTrue($response->isSuccessful());
    }
    
    public function testPurchase()
    {
        $currentDate = date('Y-m-d H:i:s');
        $expiredDate = date('Y-m-d H:i:s', strtotime('+1 week', strtotime($currentDate)));
        $json = '{"request":"Post Data Transaction","bill_no":"98765123456789","bill_reff":"12345678","bill_date":"'.$currentDate.'","bill_expired":"'.$expiredDate.'","bill_desc":"Pembayaran #12345678","bill_currency":"IDR","bill_gross":"0","bill_miscfee":"0","bill_total":"1000000","cust_no":"12","cust_name":"Test Trx","payment_channel":"707","pay_type":"1","bank_userid":"","msisdn":"31254623413414","email":"test@mail.com","terminal":"10","billing_name":"0","billing_lastname":"0","billing_address":"jalan pintu air raya","billing_address_city":"Jakarta Pusat","billing_address_region":"DKI Jakarta","billing_address_state":"Indonesia","billing_address_poscode":"10710","billing_msisdn":"","billing_address_country_code":"ID","receiver_name_for_shipping":"Faspay Test","shipping_lastname":"","shipping_address":"jalan pintu air raya","shipping_address_city":"Jakarta Pusat","shipping_address_region":"DKI Jakarta","shipping_address_state":"Indonesia","shipping_address_poscode":"10710","shipping_msisdn":"","shipping_address_country_code":"ID","item":[{"product":"Invoice No. inv-98567891","qty":"1","amount":"1000000","payment_plan":"01","merchant_id":"99999","tenor":"00"}],"reserve1":"","reserve2":""}';
        $datajson = json_decode($json, true);
        foreach ($datajson as $key => $value) {
            $this->gateway->setParameter($key, $value);
        }
        $response = $this->gateway->purchase()->send();
        error_log(print_r($response, TRUE), 3, "/home/videk/www/omnipay-faspay/error.log");
        $this->assertTrue($response->isSuccessful());
    }
}
