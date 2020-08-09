<?php
  $wrapTag = $wrapTag ? $wrapTag : false;
  $backgroundThemes = $site->background_themes();
?>

<?php if($backgroundThemes->isNotEmpty()): ?>

  <?php if($wrapTag): ?>
    <<?= $wrapTag ?>>
  <?php endif?>

  <h2>Background Themes</h2>

  <?php foreach($backgroundThemes->toStructure() as $themeIndex => $backgroundTheme): ?>

    <?php 
      $uid = $backgroundTheme->uid();
      $css_theme_variable = '--background-theme--'. $uid;
      $label = $backgroundTheme->label();

      $backgrounds = $backgroundTheme->background()->toStructure()->flip();

      
      ?>
    
    <?php /* START CLASS --------------------- */ ?>
    <?= $css_theme_variable ?> { 
      
      <?php if($label->isNotEmpty()): ?>/* <?= $label ?>; */<?php endif?>

      <?php 
        $backgroundImageVariables = [];
      ?>

      <?php foreach($backgrounds as $index => $background): ?>
        
      <?php 
        
        $type = $background->type();

        /*
        --background-1-image: url(https://www.dw.com/image/19306161_303.jpg);
        --background-1-position: left top;
        --background-1-size: 33%;
        --background-1-repeat: repeat;
        --background-1-attachment: fixed; 
        --background-1-origin: content-box;  
        --background-1-clip: border-box;
        --background-1: 
            var(--background-1-image) 
            var(--background-1-position) 
          /
            var(--background-1-size)
            var(--background-1-repeat)
            var(--background-1-attachment)
            var(--background-1-origin)
            var(--background-1-clip)
          ;
          */

        
        include('css-background.php');

        ?>
     
     <?php endforeach?>

    <?php 
        $backgroundImageVariables = array_reverse($backgroundImageVariables);
        
        foreach($backgroundImageVariables as $index => $variable) {
          echo $index . ': ' . $variable . '; <br>';
        }

        $combine = function($backgroundImageVariables) {
          $bg = [];
          foreach($backgroundImageVariables as $index => $variable) {
            array_push($bg, 'var('. $index . ')');
          }
          return implode(', ', $bg);
        };

        echo '--background: ' . $combine($backgroundImageVariables) . ';';

  ?>
    
    }

    <h1><?= $themeIndex ?></h1>
    
  <?php endforeach?>
  <?php /* END CLASS --------------------- */ ?>
  
  <?php if($wrapTag): ?>
    </<?= $wrapTag ?>>
  <?php endif?>

<?php endif?>