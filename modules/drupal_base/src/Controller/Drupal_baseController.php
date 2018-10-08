<?php

namespace Drupal\drupal_base\Controller;

class Drupal_baseController
{

    public function drupal_page()
    {
        $element = array(
            '#markup' => 'Hello world!',
        );
        return $element;
    }
}
?>