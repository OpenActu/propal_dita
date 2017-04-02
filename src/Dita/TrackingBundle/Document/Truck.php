<?php

namespace Dita\TrackingBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Dita\TrackingBundle\Document\Truck
 *
 * @ODM\Document(
 *     repositoryClass="Dita\TrackingBundle\Document\TruckRepository"
 * )
 * @ODM\ChangeTrackingPolicy("DEFERRED_IMPLICIT")
 */
class Truck
{
    /**
     * @var MongoId $id
     *
     * @ODM\Id(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $identification_number
     *
     * @ODM\Field(name="identification_number", type="string")
     */
    protected $identification_number;

    /**
     * @var bool $is_active
     *
     * @ODM\Field(name="is_active", type="bool")
     */
    protected $is_active;

    /**
     * @var string $comment
     *
     * @ODM\Field(name="comment", type="string")
     */
    protected $comment;

    /**
     * @ODM\ReferenceMany(targetDocument="Bill",inversedBy="truck")
     */
    protected $bills;

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
     * Set identificationNumber
     *
     * @param string $identificationNumber
     * @return $this
     */
    public function setIdentificationNumber($identificationNumber)
    {
        $this->identification_number = $identificationNumber;
        return $this;
    }

    /**
     * Get identificationNumber
     *
     * @return string $identificationNumber
     */
    public function getIdentificationNumber()
    {
        return $this->identification_number;
    }

    /**
     * Set isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;
        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool $isActive
     */
    public function getIsActive()
    {
        return $this->is_active;
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
    public function __construct()
    {
        $this->bills = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add bill
     *
     * @param Dita\TrackingBundle\Document\Bill $bill
     */
    public function addBill(\Dita\TrackingBundle\Document\Bill $bill)
    {
        $this->bills[] = $bill;
    }

    /**
     * Remove bill
     *
     * @param Dita\TrackingBundle\Document\Bill $bill
     */
    public function removeBill(\Dita\TrackingBundle\Document\Bill $bill)
    {
        $this->bills->removeElement($bill);
    }

    /**
     * Get bills
     *
     * @return \Doctrine\Common\Collections\Collection $bills
     */
    public function getBills()
    {
        return $this->bills;
    }
}
