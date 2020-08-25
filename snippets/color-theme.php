<?php

  if( !isset($colorTheme) ) {
    return;
  } 

  $wrapTag = isset($wrapTag) ? $wrapTag : false;
  $preview = isset($preview) ? $preview : false;
  $renderCssClass = isset($renderCssClass) ? $renderCssClass : true;

?>

<?php 
    $autoidClass ='color-theme--' . $colorTheme->autoid();
    $cssClasses = ['autoidClass' => $autoidClass];
    $cssSelector = $colorTheme->css_selector();
    if($cssSelector->isNotEmpty()) array_push($cssClasses, $cssSelector);
    $cssClass = implode(', ', $cssClasses);
    # colors
    $color = $colorTheme->color();
    $backgroundColor = $colorTheme->background();
    $borderColor = $colorTheme->border();
    $outlineColor = $colorTheme->outline();
    $textShadowColor = $colorTheme->text_shadow();
    $boxShadowAmbientColor = $colorTheme->box_shadow_ambient();
?>

<?php if($preview): ?>
  <article class="box <?= $autoidClass ?> box-shadow" style="min-height: 33vh;">
    <h3>.<?= $cssClass ?></h3>
    <p>Lorem ipsum dolor sit <a href="#">amet</a>, consectetur adipisicing elit. Dicta quod ea culpa, accusantium vel cumque quam earum corporis. Nobis quos veniam, architecto molestiae odio aspernatur amet enim optio soluta ipsum?</p>
    <section class="border">
      <h4>.border</h4>
      <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ipsam illo, voluptatem molestiae aspernatur deleniti, temporibus totam necessitatibus ipsa vero saepe? Optio, alias. Qui at accusantium inventore adipisci itaque dignissimos.</p>
    </section>
    <section class="box outline">
      <h4>.outline</h4>
      <p class="outline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ipsam illo, voluptatem molestiae aspernatur deleniti, temporibus totam necessitatibus ipsa vero saepe? Optio, alias. Qui at accusantium inventore adipisci itaque dignissimos.</p>
    </section>
    <section class="box text-shadow">
      <h4>.text-shadow</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum voluptatibus vel atque animi recusandae? Ipsum vero enim cumque eaque maiores minus exercitationem, rerum nulla quaerat esse. Quis nesciunt dicta aliquid.</p>
    </section>
    <h4>.box-shadow--inset</h4>
<?php endif?>


<?php if($wrapTag): ?>
  <<?= $wrapTag ?> class="box box-shadow--inset border" style="--border-radius: 1rem;">
<?php endif?>

<?php if($renderCssClass): ?>
.<?= $cssClass ?> {
<?php endif?>
    
  <?php if($backgroundColor->isNotEmpty()): ?>--background-color: <?= $backgroundColor ?>;<?php endif?>

  <?php if($color->isNotEmpty()): ?>--color: <?= $color ?>;<?php endif?>
    
  <?php if($borderColor->isNotEmpty()): ?>--border-color: <?= $borderColor ?>;<?php endif?>
    
  <?php if($outlineColor->isNotEmpty()): ?>--outline-color: <?= $outlineColor ?>;<?php endif?>
    
  <?php if($textShadowColor->isNotEmpty()): ?>--text-shadow-color: <?= $textShadowColor ?>;<?php endif?>
    
  <?php if($boxShadowAmbientColor->isNotEmpty()): ?>--box-shadow-ambient-color: <?= $boxShadowAmbientColor ?>;<?php endif?>
  
  <?php if($backgroundColor->isNotEmpty()): ?>--inverted-color: <?= $backgroundColor ?>;<?php endif?>

  <?php if($color->isNotEmpty()): ?>--inverted-background-color: <?= $color ?>;<?php endif?>
    

<?php if($renderCssClass): ?>
}
<?php endif?>


<?php if($wrapTag): ?>
  </<?= $wrapTag ?>>
<?php endif?>


<?php if($preview): ?>
  </article>
<?php endif?>