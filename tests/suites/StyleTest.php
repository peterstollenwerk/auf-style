<?php

declare(strict_types=1);
namespace auf;

use PHPUnit\Framework\TestCase;
use Kirby\Cms\Field;

final class StyleTest extends TestCase {

  public $json0 = '{"type_theme":"utjficgp","box_theme":"649sx8rr","text_align":"text-align--center","font_size":"font-size--4","font_weight":"font-weight--bold","font_style":"font-style--italic"}';
  public $json1 = '{"box_theme":"649sx8rr"}';
  public $json2 = '{"box_theme":"box"}';
  public $json3 = '{"box_theme":"box--inverted"}';
  public $json4 = '{"font_size":"font-size--4"}';
  public $json5 = '';
  public $json6 = NULL;
  public $json7 = '{"type_theme":"utjficgp","font_size":"font-size---2","font_style":"font-style--normal"}';
  
  public $expected0 = [
    'box box-theme--649sx8rr',
    'type-theme--utjficgp',
    'text-align--center',
    'font-size--4',
    'font-weight--bold',
    'font-style--italic'
  ];
  public $expected0toString = 'box box-theme--649sx8rr type-theme--utjficgp text-align--center font-size--4 font-weight--bold font-style--italic';
  public $expected7toString = 'type-theme--utjficgp font-size---2 font-style--normal';
  
  
  public function styleSettingsField () {
    return site()->find('home')->builder()->toBuilderBlocks()->first()->style_settings();
  } 
  public function field($json) { 
    return new Field(null, 'style_settings', $json);
  }
  public function style($json) { 
    return new Style($this->field($json)); 
  }

  public function testCreatesBoxThemeClasses () {
    $this->assertEquals('box box-theme--649sx8rr', $this->style($this->json1)->boxThemeClass());
    $this->assertEquals('box', $this->style($this->json2)->boxThemeClass());
    $this->assertEquals('box box--inverted', $this->style($this->json3)->boxThemeClass());
    $this->assertEquals(false, $this->style($this->json4)->boxThemeClass());
    $this->assertEquals(false, $this->style($this->json5)->boxThemeClass());
    $this->assertEquals(false, $this->style($this->json6)->boxThemeClass());
  }
  public function testCreatesTypeThemeClass () {
    $this->assertEquals('type-theme--utjficgp', $this->style($this->json0)->typeThemeClass());
    $this->assertEquals(false, $this->style($this->json5)->typeThemeClass());
  }
  public function testCreatesTextAlignClass () {
    $this->assertEquals('text-align--center', $this->style($this->json0)->textAlignClass());
    $this->assertEquals(false, $this->style($this->json5)->textAlignClass());
  }
  public function testCreatesFontSizeClass () {
    $this->assertEquals('font-size--4', $this->style($this->json0)->fontSizeClass());
    $this->assertEquals(false, $this->style($this->json5)->fontSizeClass());
  }
  public function testCreatesFontWeightClass () {
    $this->assertEquals('font-weight--bold', $this->style($this->json0)->fontWeightClass());
    $this->assertEquals(false, $this->style($this->json5)->fontWeightClass());
  }
  public function testCreatesFontStyleClass () {
    $this->assertEquals('font-style--italic', $this->style($this->json0)->fontStyleClass());
    $this->assertEquals(false, $this->style($this->json5)->fontStyleClass());
  }
  public function testCreatesCssClasses () {
    $this->assertEquals($this->expected0, $this->style($this->json0)->cssClasses());
  }
  public function testToStringOutputsCssClassesAsString () {
    $this->assertEquals($this->expected0toString, $this->style($this->json0)->toString());
    $this->assertEquals($this->expected7toString, $this->style($this->json7)->toString());
    $this->assertEquals($this->expected0toString, $this->style($this->json0));
    $this->assertEquals($this->expected7toString, $this->style($this->json7));
  }
}