<?php
/**
 * Created by PhpStorm.
 * User: cw
 * Date: 05.09.2017
 * Time: 12:44
 */

namespace AppBundle\Entity;


class Product
{
    private $id;
    private $name;
    private $sku;
    private $price;

    /**
     * Product constructor.
     */
    public function __construct($name, $price)
    {
        $this->setName($name);
        $this->setPrice($price);
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


}