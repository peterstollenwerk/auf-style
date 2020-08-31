<div class="theme-hue-saturation-slider">
  <label for="hue">Hue:</label>
  <input id="hue" type="range" min="0" max="360" value="25">
  <label for="saturation">Saturation:</label>
  <input id="saturation" type="range" min="0" max="100" value="25">
  <script>
    var siteEl2 = document.getElementsByClassName('site')[0];
    var hueEl = document.getElementById('hue');
    var saturationEl = document.getElementById('saturation');
    hueEl.addEventListener('input', function(e){
      siteEl2.style.setProperty('--theme-color-h', hueEl.value);
    });
    saturationEl.addEventListener('input', function(e){
      siteEl2.style.setProperty('--theme-color-s', saturationEl.value + '%');
    });
  </script>
</div>