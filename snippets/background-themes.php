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
      $css_theme_variable = '.background-theme--'. $uid;
      $label = $backgroundTheme->label();
      $backgrounds = [];
    ?>
    
    <?php /* START CLASS --------------------- */ ?>

    <?= $css_theme_variable ?> { <?php if($label->isNotEmpty()): ?>/* <?= $label ?>; */<?php endif?>

      <?php foreach($backgroundTheme->background()->toStructure() as $index => $background): ?>
        
      <?php 

        include('css-background.php');
        $vars = $getBackgroundVars();

        $varOrder = [
          'image',
          'position',
          'size',
          'repeat',
          'attachment',
          'origin',
          'clip'
        ];

        $hasPosition = array_key_exists('position', $vars);
        $hasSize = array_key_exists('size', $vars);
        $showSlash = ($hasPosition && $hasSize) ? true : false;

        $bgKey = '--background-' . $index;
        $bgValue = [];
        foreach($varOrder as $key) {
          if(array_key_exists($key, $vars)) {
            array_push($bgValue, $vars[$key]);
            if($key == 'position' && $showSlash) {
              array_push($bgValue, '/');
            }
          }
        }
        
        echo $bgKey . ': ' . implode(' ', $bgValue) . ';';
        
        array_push($backgrounds, $bgKey);

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
        ?>
     
     <?php endforeach?>

      <?php
        $key = '--background';
        $value = function() use ($backgrounds) {
          $vs = [];
          foreach($backgrounds as $background) {
            $v = 'var('. $background . ')';
            array_push($vs, $v);
          }
          return implode(', ' , $vs);
        };

          echo $backgroundVariable = $key .': '. $value() . ';';
        
    ?>

    }

  <?php endforeach?>
  <?php /* END CLASS --------------------- */ ?>
  

  <?php if($wrapTag): ?>
    </<?= $wrapTag ?>>
  <?php endif?>

<?php endif?>