<?php


namespace Starryseer\Google;

use Starryseer\Google\Config;
use Starryseer\Google\Login\User;
use Starryseer\Google\Pay\Order;
use Starryseer\Google\Token\AccessToken;
use Starryseer\Google\Utility\Network;
use EasySwoole\Spl\SplArray;

class Google
{
    protected $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function userVerify(User $user,$timeout=10)
    {
        try{
            if(empty($user->getIdToken()))
                return false;

            $response = Network::post(GateWay::LOGIN,$user->toArray(),['timeout'=>$timeout]);
            $response = $response->getBody();
            if (!$response)
                return false;

            $response = json_decode($response, true);
            if (isset($response['status']) and $response['status'] == 0)
            {
                return new SplArray( $response['receipt'] );
            }
        }
        catch (\Exception $e)
        {
            return false;
        }
    }

    public function orderReceipt(Order $order,$timeout=10)
    {
        try {
            $url = sprintf(GateWay::PAY, $order->getPackageName(), $order->getProductId(), $order->getPurchaseToken(), $order->getAccessToken());
            $response = Network::get($url,null,['timeout'=>$timeout]);
            $response = $response->getBody();
            if (!$response)
                return false;
            $response = json_decode($response, true);
            if (!is_array($response))
                return false;

            return new SplArray( $response );
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getAccessToken(AccessToken $token,$timeout=10)
    {
        try {
            $response = Network::postJson(GateWay::ACCOUNT,json_encode(array_merge($token->toArray(),$this->config->toArray()),true),['timeout'=>$timeout]);
            $response = $response->getBody();
            if (!$response or strpos($response,'access_token') === false)
                return false;

            $response = json_decode($response, true);
            return $response['access_token'];

            return new SplArray( $response );
        }
        catch (\Exception $e) {
            return false;
        }
    }
}