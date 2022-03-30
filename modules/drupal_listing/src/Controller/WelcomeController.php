<?php
/**
 * @file
 * @author Rakesh James
 * Contains \Drupal\example\Controller\ExampleController.
 * Please place this file under your example(module_root_folder)/src/Controller/
 */
namespace Drupal\drupal_listing\Controller;
/**
 * Provides route responses for the Example module.
 */
class WelcomeController {
  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function welcome() {
    $element = array(
      '#markup' => 'Welcome and introduction from Priya Degwekar, Module Leader ',
    );
    return $element;
  }
}
?>