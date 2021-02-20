<?php


namespace Starryseer\Google;

use EasySwoole\Spl\SplEnum;

class Config extends SplEnum
{
    protected $client_id;
    protected $client_secret;

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @param mixed $client_id
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
    }

    /**
     * @return mixed
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * @param mixed $client_secret
     */
    public function setClientSecret($client_secret)
    {
        $this->client_secret = $client_secret;
    }

    public function toArray(array $columns = null, $filter = null)
    {
        return parent::toArray(null, self::FILTER_NOT_NULL);
    }

}