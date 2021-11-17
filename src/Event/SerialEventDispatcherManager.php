<?php

namespace Drupal\serial\Event;

use Symfony\Contracts\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Class HookEventDispatcherManager.
 *
 * Wrapper class for the external dispatcher dependency. If this ever changes
 * we only have to change it once.
 */
final class SerialEventDispatcherManager implements SerialEventDispatcherInterface {

  /**
   * The event dispatcher.
   *
   * @var \Symfony\Component\EventDispatcher\EventDispatcherInterface
   */
  private EventDispatcherInterface $eventDispatcher;

  /**
   * EntityDispatcherManager constructor.
   *
   * @param \Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher
   *   The event dispatcher.
   */
  public function __construct(EventDispatcherInterface $eventDispatcher) {
    $this->eventDispatcher = $eventDispatcher;
  }

  /**
   * {@inheritdoc}
   */
  public function register(EventInterface $event): Event {
    return $this->eventDispatcher->dispatch($event->getDispatcherType(), $event);
  }
}
