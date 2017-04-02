<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class DitaTrackingFeatureContext implements Context
{
  private $em;

  public function __construct($entity_manager)
  {
      $this->em=$entity_manager;
  }
}
