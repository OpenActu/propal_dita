<?php
namespace Dita\TrackingBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Dita\TrackingBundle\Document\Truck;
use Dita\TrackingBundle\Document\Address;
use Dita\TrackingBundle\Document\Bill;
use Dita\TrackingBundle\Document\Tracking;
class LoadTrucks implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{

    $truck = new Truck();
    $truck->setIdentificationNumber('436VQ76');
    $truck->setIsActive(false);

		$origin_path = new Address();
		$origin_path->setAddress1('6 Grande Rue');
		$origin_path->setCountry('france');
		$origin_path->setCity('Bus-la-mésière');

		$target_path = new Address();
		$target_path->setAddress1('1 rue Tiquetone');
		$target_path->setCountry('france');
		$target_path->setCity('Paris');

		$bill = new Bill();
		$bill->setPrice(500);
		$bill->setStartDate(new \DateTime('2016-01-01 20:00:00'));
		$bill->setOriginPath($origin_path);
		$bill->setTargetPath($target_path);
    $bill->setTruck($truck);
		$truck->addBill($bill);
		
		$lat = 8;
		$long= 50;
		$date = $bill->getStartDate();

	  for($i=0;$i<100;$i++){

			$dist_lat = rand(0,1000) / 10000;
			$dir_lat  = rand(0,1) ? 1 : -1;
			$dir_long = rand(0,1) ? 1 : -1;
			$dist_long= rand(0,1000) / 10000;
			$tracking = new Tracking();

			$lat+=($dist_lat*$dir_lat);
			$long+=($dist_long*$dir_long);

			$tracking->setLatitude($lat);
			$tracking->setLongitude($long);

			$interval = 'PT60S';
			$date->add(new \DateInterval($interval));
			$tracking->setInsertedAt($date);

			$bill->addTracking($tracking);
		}

		$manager->persist($bill);
		$manager->flush();
	}
}
