<?php

namespace auf;

use Kirby\Cms\Field;
use phpDocumentor\Reflection\Types\This;

class Style {

  public $settings = [];

  public function __construct(Field $field) 
  {
    if($json = $field->value()) {
      $this->settings = json_decode($json, true);
    }
  }

  public function __toString(): string {
    return $this->toString();
  }

  public function toString() {
    return $this->toCssClasses();
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
    if($typeTheme = $this->hasSetting('type_theme') ? $this->settings['type_theme'] : false) { 
      return 'type-theme--' . $typeTheme; 
    }
  }
  
  public function textAlignClass()
  {
    return $this->hasSetting('text_align') ? $this->settings['text_align'] : false;
  }
  
  public function fontSizeClass()
  {
    return $this->hasSetting('font_size') ? $this->settings['font_size'] : false;
  }
  
  public function fontWeightClass()
  {
    return $this->hasSetting('font_weight') ? $this->settings['font_weight'] : false;
  }
  
  public function fontStyleClass()
  {
    return $this->hasSetting('font_style') ? $this->settings['font_style'] : false;
  }

  public function cssClasses () {
    return [
      $this->boxThemeClass(),
      $this->typeThemeClass(),
      $this->textAlignClass(),
      $this->fontSizeClass(),
      $this->fontWeightClass(),
      $this->fontStyleClass()
    ];
  }

  public function toCssClasses() {
    return implode(' ', array_filter($this->cssClasses()));
  }

  public function inlineStyles () {
    $inlineStyles = [
      $this->marginTopVar(),
      $this->marginBottomVar(),
      $this->customInlineStyles(),
    ];
    return implode(' ', array_filter($inlineStyles));
  }
  
  public function customInlineStyles () {
    return $this->hasSetting('custom_inline_style') ? $this->settings['custom_inline_style'] : false;
  }
  
  public function marginTopVar () {
    if( $this->hasSetting('margin_top') ) {
      $marginTop = $this->settings['margin_top'];
      return 'margin-top: calc( var(--margin, 1rem) * ' . $marginTop . ');';
    } else { return false; }
  }
  public function marginBottomVar () {
    if( $this->hasSetting('margin_bottom') ) {
      $marginBottom = $this->settings['margin_bottom'];
      return 'margin-bottom: calc( var(--margin, 1rem) * ' . $marginBottom . ');';
    } else { return false; }
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
