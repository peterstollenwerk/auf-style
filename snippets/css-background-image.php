<?php 

if($type == 'image') {
  $key = '--background-image--'.$index.'';
  $value = $background->image()->toFile()->url();
  $backgroundImageVariables[$key] = $value;
}