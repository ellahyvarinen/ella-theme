/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

 (function($) {
  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        console.log('Go');

        function myFunction(e) {
          var x = e.clientX;
          var y = e.clientY;
          var coor = "Coordinates: (" + x + "," + y + ")";
          document.getElementById("demo").innerHTML = coor;
        }

        function clearCoor() {
          document.getElementById("demo").innerHTML = "";
        }

        $('#hamburger').on( "click", function() {
          $('header.banner').toggleClass('active');
          $( this ).toggleClass('active');
        });


        new WOW().init();


        
        //particlesJS.load('night-sky', '../wp-content/themes/ella-theme/assets/scripts/nightsky.json', function() {
          /*
          particlesJS.load('night-sky', '../assets/scripts/nightsky.json', function() {
            console.log('callback - particles.js config loaded');
          });
          */



/**
*
* SVG animations
*
*/
/*
var path = document.querySelector('.squiggle-animated path');
var length = path.getTotalLength();
// Clear any previous transition
path.style.transition = path.style.WebkitTransition = 'none';
// Set up the starting positions
path.style.strokeDasharray = length + ' ' + length;
path.style.strokeDashoffset = length;
// Trigger a layout so styles are calculated & the browser
// picks up the starting position before animating
path.getBoundingClientRect();
// Define our transition
path.style.transition = path.style.WebkitTransition = 'stroke-dashoffset 2s ease-in-out';
// Go!
path.style.strokeDashoffset = '0';
*/

/**
*
* Works
*
*/


//RAIN
var nbDrop = 1350;

function randRange(minNum, maxNum) {
  return (Math.floor(Math.random() * (maxNum - minNum + 1)) + minNum);
}
function createRain() {
  for (i = 1; i < nbDrop; i++) {
    var dropLeft = randRange(0, 2600);
    var dropTop = randRange(-1000, 1400);

    $('.rain').append('<div class="drop" id="drop' + i + '"></div>');
    $("#drop" + i).css('left', dropLeft);
    $("#drop" + i).css("top", dropTop);
  }
}
createRain();



//WAVES
var e = $('section.work-art .waves');
for (var lol = 0; lol < 5; lol++) {
  e.clone().insertAfter(e);
}

/*
// init controller
var controller = new ScrollMagic.Controller();

// create a scene
new ScrollMagic.Scene({
        duration: 100,    // the scene should last for a scroll distance of 100px
        offset: 50        // start this scene after scrolling for 50px
      })
    .setPin("#my-sticky-element") // pins the element for the the scene's duration
    .addTo(controller); // assign the scene to the controller
    */


  },
  finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page

        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        /*
        particlesJS.load('particles-js', 'assets/scripts/particles.json', function() {
          console.log('everything all good - ready to rock'); 
        });
        */

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about': {
      init: function() {
        // JavaScript to be fired on the about us page
        //console.log('I know this web page is made with Elementor and I supposed to be a web developer');
        //console.log('Not everything is made with Elementor tho!');
        //console.log('I just want to work effectively when creating new web page layouts');
        //console.log('My custom theme + Elementor makes just a perfect combination');
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
