<?php

namespace Drupal\serial\Event;

/**
 * Interface HookEventDispatcherInterface.
 */
interface SerialEventDispatcherInterface {

  /**
   * Event name prefix to prevent name collision.
   */
  public const PREFIX = 'serial_event_dispatcher.';

  public const SERIAL = self::PREFIX . 'entity.pre_save';

}
