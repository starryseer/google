<?php


namespace Starryseer\Google\Login;

use EasySwoole\Spl\SplEnum;

class User extends SplEnum
{
    protected $id_token;

    public function setIdToken($id_token)
    {
        $this->id_token = $id_token;
    }

    public function getIdToken()
    {
        return $this->id_token;
    }

    public function toArray(array $columns = null, $filter = null)
    {
        return parent::toArray(null, self::FILTER_NOT_NULL);
    }
}