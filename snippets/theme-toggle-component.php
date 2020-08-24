<div class="theme-toggle-component">
  <button class="theme-toggle">Toggle Theme</button>
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
  <script>
  var themeToggleEl = document.getElementsByClassName('theme-toggle')[0];
  var siteEl = document.getElementsByClassName('site')[0];
  var setActiveTheme = function(value) {
    siteEl.dataset.activeTheme = value;
  }
  var getActiveTheme = function() {
    return siteEl.dataset.activeTheme;
  }
  themeToggleEl.addEventListener('click', function() {
    var oldTheme = getActiveTheme();
    var newTheme = '';
    if (oldTheme === 'site--light') {
      newTheme = 'site--dark';
      siteEl.classList.remove(oldTheme);
      setActiveTheme(newTheme);
      siteEl.classList.add(newTheme);
    } else {
      newTheme = 'site--light';
      siteEl.classList.remove(oldTheme);
      setActiveTheme(newTheme);
      siteEl.classList.add(newTheme);
    }
  });
</script>
</div>
