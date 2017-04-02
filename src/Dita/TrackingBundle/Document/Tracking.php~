<?php

namespace Dita\TrackingBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Dita\TrackingBundle\Document\Tracking
 *
 * @ODM\Document(
 *     repositoryClass="Dita\TrackingBundle\Document\TrackingRepository"
 * )
 * @ODM\ChangeTrackingPolicy("DEFERRED_IMPLICIT")
 */
class Tracking
{
    /**
     * @var MongoId $id
     *
     * @ODM\Id(strategy="AUTO")
     */
    protected $id;

    /**
     * @var float $latitude
     *
     * @ODM\Field(name="latitude", type="float")
     */
    protected $latitude;

    /**
     * @var float $longitude
     *
     * @ODM\Field(name="longitude", type="float")
     */
    protected $longitude;

    /**
     * @var date $inserted_at
     *
     * @ODM\Field(name="inserted_at", type="date")
     */
    protected $inserted_at;


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
     * Set latitude
     *
     * @param float $latitude
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Get latitude
     *
     * @return float $latitude
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Get longitude
     *
     * @return float $longitude
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set insertedAt
     *
     * @param timestamp $insertedAt
     * @return $this
     */
    public function setInsertedAt(\DateTime $insertedAt)
    {
        $this->inserted_at = new \MongoDate($insertedAt->getTimeStamp());
        return $this;
    }

    /**
     * Get insertedAt
     *
     * @return timestamp $insertedAt
     */
    public function getInsertedAt()
    {
        return $this->inserted_at;
    }
}
