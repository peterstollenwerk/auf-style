<?php
  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : true;
  
  $boxThemes = $site->box_themes();
?>

<?php if($boxThemes->isNotEmpty()): ?>

  <?php foreach($boxThemes->toStructure() as $boxTheme): ?>

  <?php 
      $uid = $boxTheme->uid();
      $css_class = 'box-theme--'. $uid;
      $colorThemeUid = $boxTheme->color_theme();
  ?>

  <?php if($preview): ?>
    <article class="box <?= $css_class ?>" style="min-height: 33vh;">
      <h3>.<?= $css_class ?></h3>
      <p>Lorem ipsum dolor sit <a href="#">amet</a>, consectetur adipisicing elit. Dicta quod ea culpa, accusantium vel cumque quam earum corporis. Nobis quos veniam, architecto molestiae odio aspernatur amet enim optio soluta ipsum?</p>
  <?php endif?>



  <?php if($wrapTag): ?>
    <<?= $wrapTag ?>>
  <?php endif?>

  <?php if($renderCssClass): ?>
.<?= $css_class ?> {
  <?php endif?>
      
  <?php /* START: COLOR THEME --------------------------*/ ?>
    <?php if($colorThemeUid->isNotEmpty()): ?>
    
    <?php 
    $colorTheme = $site->color_themes()->toStructure()->findBy('uid', $colorThemeUid->toString()); 
    if(!$colorTheme) {
      echo '/* ERROR: color-theme »' . $colorThemeUid . '« NOT FOUND */';
    } else {
      echo '/* color-theme: ' . $colorThemeUid . ' */';
      snippet('auf-style/color-theme', [
        'colorTheme' => $colorTheme, 
        'renderCssClass' => false
      ]); }?>
    <?php endif?>
  <?php /* END: COLOR THEME --------------------------*/ ?>




  <?php if($renderCssClass): ?>
}
  <?php endif?>





  <?php if($wrapTag): ?>
    </<?= $wrapTag ?>>
  <?php endif?>
  
  <?php if($preview): ?>
    </article>
  <?php endif?>





  <?php endforeach?>




<?php endif?>