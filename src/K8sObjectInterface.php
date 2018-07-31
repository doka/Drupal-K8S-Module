<?php

namespace Drupal\kubernetes;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a k8sobject entity.
 *
 * We have this interface so we can join the other interfaces it extends.
 *
 * @ingroup kubernetes
 */
interface K8sObjectInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
