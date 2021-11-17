<?php

namespace Drupal\serial\Event\Serial;

use Drupal\Core\Entity\EntityInterface;
use Drupal\serial\Event\EventInterface;
use Drupal\serial\Event\SerialEventDispatcherInterface;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * Class FormAlterEvent.
 */
class SerialSetEvent extends Event implements EventInterface {

  /**
   * @var string
   */
  private string $value;

  /**
   * The Entity.
   *
   * @var \Drupal\Core\Entity\EntityInterface
   */
  protected $entity;

  /**
   * @param string $value
   */
  public function __construct(string $value, EntityInterface $entity) {
    $this->value = $value;
    $this->entity = $entity;
  }

  /**
   * {@inheritdoc}
   */
  public function getDispatcherType(): string {
    return SerialEventDispatcherInterface::SERIAL;
  }

  /**
   * @return string
   */
  public function getValue(): string {
    return $this->value;
  }

  /**
   * @return \Drupal\Core\Entity\EntityInterface
   */
  public function getEntity(): EntityInterface {
    return $this->entity;
  }

}
