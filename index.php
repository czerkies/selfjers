<?php

function selfjers($vars) {

  if (!empty($vars) && is_string($vars)) {

    $selfjers = $vars . 'Test';

  } else {

    $selfjers = 'Toto';

  }

  echo $selfjers;

}
