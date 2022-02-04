// Require jQuery (Fancybox dependency)
window.$ = window.jQuery = require('jquery');

// Fancybox
const fancybox = require('@fancyapps/fancybox');
// Fancybox Stylesheet
//const fancyboxCSS = require('!style!css!@fancyapps/fancybox/dist/jquery.fancybox.css');

$('[data-fancybox="gallery"]').fancybox({
  protect: true
});

