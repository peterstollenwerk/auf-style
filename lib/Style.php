<?php

namespace auf;

use Kirby\Cms\Field;

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

  public function boxTheme()
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
