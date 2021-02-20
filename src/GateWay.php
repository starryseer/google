<?php


namespace Starryseer\Google;

use EasySwoole\Spl\SplEnum;

class GateWay extends SplEnum
{
    const ACCOUNT =  'https://accounts.google.com/o/oauth2/token';
    const LOGIN = 'https://www.googleapis.com/oauth2/v3/tokeninfo';
    const PAY = 'https://www.googleapis.com/androidpublisher/v3/applications/%s/purchases/products/%s/tokens/%s?access_token=%s';
}