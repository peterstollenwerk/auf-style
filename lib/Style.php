<?php

namespace auf;

use Kirby\Cms\Field;

class Style {

  static $test = 'ASDF';

  static function getBoxThemeClassByBoxTheme( Field $boxTheme ) {
    if($boxTheme->isEmpty()) {
      return '';
    }
    elseif($boxTheme == 'box') {
      return 'box';
    }
    elseif($boxTheme == 'box--inverted') {
      return 'box box--inverted';
    }
    else {
      return 'box box-theme--'. $boxTheme;
    }
  }

}
