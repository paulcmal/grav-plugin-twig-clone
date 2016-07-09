<?php
/**
 * @file
 * TwigClone implementation.
 */

namespace Grav\Plugin\TwigClone;

/**
 * Provides the clone function to twig.
 */
class TwigClone extends \Twig_Extension {

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'clone';
  }

  /**
   * {@inheritdoc}
   */
  public function getFunctions() {
    return array(
      new \Twig_SimpleFunction('clone', [$this, 'cloneObject'], array(
        'is_safe' => array('html'),
      )),
    );
  }

  /**
   * Provides clone function to Twig templates.
   *
   * @param object $object
   *   An object to clone.
   *
   * @return object
   *   Cloned object.
   */
  public function cloneObject($object) {
    if (!is_object($object)) {
      throw new \InvalidArgumentException('Can only clone objects.');
    }
    return clone $object;
  }

}
