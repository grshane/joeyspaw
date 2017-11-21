<?php
/**
 * @file
 * Contains \Drupal\first_module\Controller\FirstController.
 */
 
namespace Drupal\certbot_challenge\Controller;
 
use Drupal\Core\Controller\ControllerBase;
 
class CertbotChallengeController extends ControllerBase {
  public function content() {

    use Symfony\Component\HttpFoundation\Response;

    $response = new Response();
    $response->setContent('<h1>Hello world</h1>');
    return $response;
  }
}

