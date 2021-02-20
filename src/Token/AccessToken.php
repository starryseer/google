<?php


namespace Starryseer\Google\Token;

use EasySwoole\Spl\SplEnum;

class AccessToken extends SplEnum
{
    protected $grant_type;
    protected $refresh_token;

    /**
     * @return mixed
     */
    public function getGrantType()
    {
        return $this->grant_type;
    }

    /**
     * @param mixed $grant_type
     */
    public function setGrantType($grant_type)
    {
        $this->grant_type = $grant_type;
    }

    /**
     * @return mixed
     */
    public function getRefreshToken()
    {
        return $this->refresh_token;
    }

    /**
     * @param mixed $refresh_token
     */
    public function setRefreshToken($refresh_token)
    {
        $this->refresh_token = $refresh_token;
    }

    public function toArray(array $columns = null, $filter = null)
    {
        return parent::toArray(null, self::FILTER_NOT_NULL);
    }
}