<div class="toggle-button">

<button class="theme-toggle box box-shadow">Toggle Theme</button>

<button class="theme-toggle box border" style="--background-color: transparent; --border-color: grey ">Secondary</button>
<button class="theme-toggle box" style="--background-color: transparent; ">Tertiary</button>

<script>
  const themeToggleEl = document.getElementsByClassName('theme-toggle')[0];
  const bodyEl = document.getElementsByTagName('body')[0];
  const setActiveTheme = function(value) {
    bodyEl.dataset.activeTheme = value;
  }
  const getActiveTheme = function() {
    return bodyEl.dataset.activeTheme;
  }
  themeToggleEl.addEventListener('click', function() {
    const oldTheme = getActiveTheme();
    let newTheme = '';
    if(oldTheme === 'page-theme--light') {
      newTheme = 'page-theme--dark';
      bodyEl.classList.remove(oldTheme);
      setActiveTheme(newTheme);
      bodyEl.classList.add(newTheme);
    } else {
      newTheme = 'page-theme--light';
      bodyEl.classList.remove(oldTheme);
      setActiveTheme(newTheme);
      bodyEl.classList.add(newTheme);
    }
  });
</script>
</div>