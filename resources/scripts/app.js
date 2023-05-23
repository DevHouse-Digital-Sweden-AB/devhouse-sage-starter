import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {

  // Mobile menu functionality
  const mobileMenuBtn = document.getElementById('hamburger-button');
  const mobileMenu = document.getElementById('primary-navigation');
  
  mobileMenuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('opened');
  });

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);