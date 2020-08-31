<div class="theme-toggle-component">
  <button class="theme-toggle">Toggle Theme</button>
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
