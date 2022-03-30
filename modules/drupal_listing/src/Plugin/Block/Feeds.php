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
 *   id = "drupal_listing-feeds",
 *   admin_label = @Translation("Feeds"),
 *   category = @Translation("Custom feed block")
 * )
 */
class Feeds extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => 'Materials',
    );
  }
}