import {on, off, fire} from 'delegated-events';

// Standart class to use for "active" state
const CLASS_ON = '-on';

// Auto toggle the active state on lick
on('click', '.js-toggle-on-click', function(event) {
  event.target.classList.toggle(CLASS_ON);
});

const navMenuHeader = document.getElementById('main-nav-header');

// Event click on button main menu header (hamburger)
on('click', '#js-main-nav-header', function(event) {
  navMenuHeader.classList.toggle(CLASS_ON);

  if (event.target.getAttribute('aria-expanded') === 'false' ) {
    event.target.setAttribute('aria-expanded', 'true');
  } else {
    event.target.setAttribute('aria-expanded', 'false');
  }
});
