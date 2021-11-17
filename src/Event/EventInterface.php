<?php

namespace Drupal\serial\Event;

/**
 * Interface EntityEventInterface.
 */
interface EventInterface {

  /**
   * Get the dispatcher type.
   *
   * @return string
   *   The dispatcher type.
   */
  public function getDispatcherType(): string;

}
