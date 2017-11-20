<?php
/**
 * @file
 * Contains \Drupal\first_module\Controller\FirstController.
 */
 
namespace Drupal\certbot-challenge\Controller;
 
use Drupal\Core\Controller\ControllerBase;
 
class CertbotChallengeController extends ControllerBase {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello world'),
    );
  }
}

