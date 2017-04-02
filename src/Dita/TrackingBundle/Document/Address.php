<?php

namespace Dita\TrackingBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Dita\TrackingBundle\Document\Address
 *
 * @ODM\Document(
 *     repositoryClass="Dita\TrackingBundle\Document\AddressRepository"
 * )
 * @ODM\ChangeTrackingPolicy("DEFERRED_IMPLICIT")
 */
class Address
{
    /**
     * @var MongoId $id
     *
     * @ODM\Id(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $address1
     *
     * @ODM\Field(name="address1", type="string")
     */
    protected $address1;

    /**
     * @var string $address2
     *
     * @ODM\Field(name="address2", type="string")
     */
    protected $address2;

    /**
     * @var string $address3
     *
     * @ODM\Field(name="address3", type="string")
     */
    protected $address3;

    /**
     * @var string $address4
     *
     * @ODM\Field(name="address4", type="string")
     */
    protected $address4;

    /**
     * @var string $city
     *
     * @ODM\Field(name="city", type="string")
     */
    protected $city;

    /**
     * @var string $country
     *
     * @ODM\Field(name="country", type="string")
     */
    protected $country;

    /**
     * @var string $phone
     *
     * @ODM\Field(name="phone", type="string")
     */
    protected $phone;

    /**
     * @var string $fax
     *
     * @ODM\Field(name="fax", type="string")
     */
    protected $fax;

    /**
     * @var string $email
     *
     * @ODM\Field(name="email", type="string")
     */
    protected $email;

    /**
     * @var string $comment
     *
     * @ODM\Field(name="comment", type="string")
     */
    protected $comment;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set address1
     *
     * @param string $address1
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * Get address1
     *
     * @return string $address1
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * Get address2
     *
     * @return string $address2
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set address3
     *
     * @param string $address3
     * @return $this
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;
        return $this;
    }

    /**
     * Get address3
     *
     * @return string $address3
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * Set address4
     *
     * @param string $address4
     * @return $this
     */
    public function setAddress4($address4)
    {
        $this->address4 = $address4;
        return $this;
    }

    /**
     * Get address4
     *
     * @return string $address4
     */
    public function getAddress4()
    {
        return $this->address4;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Get city
     *
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return string $country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return $this
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Get fax
     *
     * @return string $fax
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Get comment
     *
     * @return string $comment
     */
    public function getComment()
    {
        return $this->comment;
    }
}
