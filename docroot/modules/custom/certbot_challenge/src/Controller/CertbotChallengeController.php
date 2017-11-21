<?php
/**
 * @file
 * Contains \Drupal\first_module\Controller\FirstController.
 */
 
namespace Drupal\certbot_challenge\Controller;
 
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class CertbotChallengeController extends ControllerBase {
  public function content() {

    $response = new Response();
    $response->setContent('_rCvQ8oDkW2S5q3sE_-u1bk9idn6CrPL35qjSb7jka4.2qn6s5gHRMlaCEKxm2wZeAFHequoOLhtJdQ7qyDOdVI');
    return $response;
  }
}

