<?php

namespace auf;

use Kirby\Cms\Field;
use Kirby\Data\Json;

class Style {

  public $settings = [];

  public function __construct(Field $field) 
  {
    if($json = $field->value()) {
      $this->settings = json_decode($json, true);
    }
  }

  public function __toString(): string {
    return '';
  }

  public function hasSetting(string $setting) {
    return array_key_exists($setting, $this->settings);
  }

  public function boxThemeClass()
  {
    $boxTheme = $this->hasSetting('box_theme') ? $this->settings['box_theme'] : false;

    if($boxTheme == false) { 
      return false;
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
  public function typeThemeClass()
  {
    $typeTheme = $this->hasSetting('type_theme') ? $this->settings['type_theme'] : false;
    if($typeTheme) {
      return 'type-theme--' . $typeTheme;
    }
  }
  public function textAlignClass()
  {
    return $textAlignClass = $this->hasSetting('text_align') ? $this->settings['text_align'] : false;
  }


  // STATIC METHODS FOR 

  static function getBoxThemeClassByBoxTheme( Field $boxTheme ) : String 
  {
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
