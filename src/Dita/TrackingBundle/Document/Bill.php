<?php

namespace Dita\TrackingBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Dita\TrackingBundle\Document\Address;
use Dita\TrackingBundle\Document\Truck;
use Dita\TrackingBundle\Document\Tracking;

/**
 * Dita\TrackingBundle\Document\Bill
 *
 * @ODM\Document(
 *     repositoryClass="Dita\TrackingBundle\Document\BillRepository"
 * )
 * @ODM\ChangeTrackingPolicy("DEFERRED_IMPLICIT")
 */
class Bill
{
    /**
     * @var MongoId $id
     *
     * @ODM\Id(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $reference
     *
     * @ODM\Field(name="reference", type="string")
     */
    protected $reference;

    /**
     * @var float $price
     *
     * @ODM\Field(name="price", type="float")
     */
    protected $price;

    /**
     * @var bool $is_confirmed
     *
     * @ODM\Field(name="is_confirmed", type="bool")
     */
    protected $is_confirmed;

    /**
     * @var date $start_date
     *
     * @ODM\Field(name="start_date", type="date")
     */
    protected $start_date;

    /**
     * @var date $end_date
     *
     * @ODM\Field(name="end_date", type="date")
     */
    protected $end_date;

    /**
     * @var collection $recommandations
     *
     * @ODM\Field(name="recommandations", type="collection")
     */
    protected $recommandations;

    /**
     * @ODM\ReferenceOne(targetDocument="Address", cascade={"persist"})
     */
    protected $origin_path;

    /**
     * @ODM\ReferenceOne(targetDocument="Address", cascade={"persist"})
     */
    protected $target_path;

    /**
     * @ODM\ReferenceOne(targetDocument="Truck", cascade={"persist"},mappedBy="bills")
     */
    protected $truck;

    /**
     * @ODM\ReferenceMany(targetDocument="Tracking", cascade={"persist"})
     */
    protected $trackings;

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
     * Set reference
     *
     * @param string $reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Get reference
     *
     * @return string $reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set isConfirmed
     *
     * @param bool $isConfirmed
     * @return $this
     */
    public function setIsConfirmed($isConfirmed)
    {
        $this->is_confirmed = $isConfirmed;
        return $this;
    }

    /**
     * Get isConfirmed
     *
     * @return bool $isConfirmed
     */
    public function getIsConfirmed()
    {
        return $this->is_confirmed;
    }

    /**
     * Set startDate
     *
     * @param date $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;
        return $this;
    }

    /**
     * Get startDate
     *
     * @return date $startDate
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set endDate
     *
     * @param date $endDate
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;
        return $this;
    }

    /**
     * Get endDate
     *
     * @return date $endDate
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Set recommandations
     *
     * @param collection $recommandations
     * @return $this
     */
    public function setRecommandations($recommandations)
    {
        $this->recommandations = $recommandations;
        return $this;
    }

    /**
     * Get recommandations
     *
     * @return collection $recommandations
     */
    public function getRecommandations()
    {
        return $this->recommandations;
    }
    public function __construct()
    {
        $this->trackings = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set originPath
     *
     * @param Dita\TrackingBundle\Document\Address $originPath
     * @return $this
     */
    public function setOriginPath(\Dita\TrackingBundle\Document\Address $originPath)
    {
        $this->origin_path = $originPath;
        return $this;
    }

    /**
     * Get originPath
     *
     * @return Dita\TrackingBundle\Document\Address $originPath
     */
    public function getOriginPath()
    {
        return $this->origin_path;
    }

    /**
     * Set targetPath
     *
     * @param Dita\TrackingBundle\Document\Address $targetPath
     * @return $this
     */
    public function setTargetPath(\Dita\TrackingBundle\Document\Address $targetPath)
    {
        $this->target_path = $targetPath;
        return $this;
    }

    /**
     * Get targetPath
     *
     * @return Dita\TrackingBundle\Document\Address $targetPath
     */
    public function getTargetPath()
    {
        return $this->target_path;
    }

    /**
     * Set truck
     *
     * @param Dita\TrackingBundle\Document\Truck $truck
     * @return $this
     */
    public function setTruck(\Dita\TrackingBundle\Document\Truck $truck)
    {
        $this->truck = $truck;
        return $this;
    }

    /**
     * Get truck
     *
     * @return Dita\TrackingBundle\Document\Truck $truck
     */
    public function getTruck()
    {
        return $this->truck;
    }

    /**
     * Add tracking
     *
     * @param Dita\TrackingBundle\Document\Tracking $tracking
     */
    public function addTracking(\Dita\TrackingBundle\Document\Tracking $tracking)
    {
        $this->trackings[] = $tracking;
    }

    /**
     * Remove tracking
     *
     * @param Dita\TrackingBundle\Document\Tracking $tracking
     */
    public function removeTracking(\Dita\TrackingBundle\Document\Tracking $tracking)
    {
        $this->trackings->removeElement($tracking);
    }

    /**
     * Get trackings
     *
     * @return \Doctrine\Common\Collections\Collection $trackings
     */
    public function getTrackings()
    {
        return $this->trackings;
    }
}
