document.querySelector('.nav-toggle')?.addEventListener('click', () => {
  document.querySelector('.main-nav')?.classList.toggle('open');
});


// v38: auto-select country code and add progress/loading state to buttons/forms
(function () {
  function setCountryCodeByLocale() {
    var select = document.getElementById('country_code');
    if (!select) return;

    var locale = (navigator.language || navigator.userLanguage || '').toUpperCase();
    var country = '';
    if (locale.indexOf('-') !== -1) country = locale.split('-').pop();
    if (!country && locale.length === 2) country = locale;

    if (country) {
      var option = select.querySelector('option[data-country="' + country + '"]');
      if (option) {
        select.value = option.value;
        return;
      }
    }

    // Browser locale fallback for India if no country is available
    if (!select.value) select.value = '+91';
  }

  function setupButtonProgress() {
    document.querySelectorAll('form').forEach(function (form) {
      form.addEventListener('submit', function () {
        var btn = form.querySelector('button[type="submit"], input[type="submit"]');
        if (!btn || btn.classList.contains('is-loading')) return;

        if (btn.tagName.toLowerCase() === 'button') {
          btn.setAttribute('data-original-text', btn.innerHTML);
          btn.innerHTML = '<span class="btn-progress-bar"></span><span class="btn-progress-text">Please wait...</span>';
        } else {
          btn.setAttribute('data-original-text', btn.value);
          btn.value = 'Please wait...';
        }

        btn.classList.add('is-loading');
        btn.setAttribute('aria-busy', 'true');
      });
    });

    document.querySelectorAll('a.btn, a.v20-quote, a.design3-cta').forEach(function (link) {
      link.addEventListener('click', function () {
        if (link.classList.contains('is-loading')) return;
        link.classList.add('is-loading');
        link.setAttribute('aria-busy', 'true');
        if (!link.querySelector('.btn-progress-bar')) {
          var bar = document.createElement('span');
          bar.className = 'btn-progress-bar';
          link.prepend(bar);
        }
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () {
      setCountryCodeByLocale();
      setupButtonProgress();
    });
  } else {
    setCountryCodeByLocale();
    setupButtonProgress();
  }
})();
