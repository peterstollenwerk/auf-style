<?php

namespace auf;

use Kirby\Cms\Field;

class Style extends Field {

  public function __toString(): string
  {
      return 'ASDFASDFASDF';
      return $this->toString();
  }

  static function getBoxThemeClassByBoxTheme( Field $boxTheme ) : String {
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
