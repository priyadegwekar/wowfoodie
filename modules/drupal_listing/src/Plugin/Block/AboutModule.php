<?php
/**
 * @file
 * Contains \Drupal\article\Plugin\Block\XaiBlock.
 */

namespace Drupal\drupal_listing\Plugin\Block;

use Drupal\Core\Block\BlockBase;


/**
 * Provides a 'article' block.
 *
 * @Block(
 *   id = "drupal_listing-aboutmodule",
 *   admin_label = @Translation("About The Module"),
 *   category = @Translation("Custom About Module block")
 * )
 */
class AboutModule extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => 'About The Module',
    );
  }
}