<?php

namespace Drupal\certbot_challenge\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Comment.
 */
class CertbotChallengeController extends ControllerBase {

  /**
   * Comment.
   */
  public function content() {

    $response = new Response();
    $response->setContent('_rCvQ8oDkW2S5q3sE_-u1bk9idn6CrPL35qjSb7jka4.2qn6s5gHRMlaCEKxm2wZeAFHequoOLhtJdQ7qyDOdVI');
    return $response;
  }

}
