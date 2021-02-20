<?php


namespace Starryseer\Google\Pay;


class Order
{
    protected $access_token;
    protected $package_name;
    protected $product_id;
    protected $purchase_token;

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * @param mixed $access_token
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * @return mixed
     */
    public function getPackageName()
    {
        return $this->package_name;
    }

    /**
     * @param mixed $package_name
     */
    public function setPackageName($package_name)
    {
        $this->package_name = $package_name;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
    }

    /**
     * @return mixed
     */
    public function getPurchaseToken()
    {
        return $this->purchase_token;
    }

    /**
     * @param mixed $purchase_token
     */
    public function setPurchaseToken($purchase_token)
    {
        $this->purchase_token = $purchase_token;
    }


}