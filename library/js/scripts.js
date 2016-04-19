/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w = window, x = w.innerHeight, y = w.innerWidth;
	return { width: y, height: x };
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
/*var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;*/


/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *	// update the viewport, in case the window size has changed
 *	viewport = updateViewportDimensions();
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/

/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
function loadGravatars() {
  // set the viewport using the function above
  viewport = updateViewportDimensions();
  // if the viewport is tablet or larger, we load in the gravatars
  if (viewport.width >= 768) {
    jQuery('.comment img[data-gravatar]').each(function () {
      jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
    });
  }
} // end function


///*
// * Put all your regular jQuery in here.
//*/
//jQuery(document).ready(function($) {
//
//  /*
//   * Let's fire off the gravatar function
//   * You can remove this if you don't need it
//  */
//  //loadGravatars();
//
//
//
//
//}); /* end of as page load scripts */



//menu tabs
var foodMenu = document.getElementById('js_menu');

if (foodMenu) {
  var foodtabs = foodMenu.getElementsByClassName('tab-food-menu'),
    foodsections = foodMenu.getElementsByClassName('section-food-menu'),
    pgMeCount = 0,
    menuCount = foodtabs.length;


  //toggles the paginated tabs of only one menu 'group'
  var pgMe = {
    set : function(el) {
      var vp = updateViewportDimensions(),
        parent = el.parentElement.parentElement; //grandaddy, technically
      return (vp.width < 1180) ?
        parent.getElementsByClassName('menu-page') :
        parent.getElementsByClassName('paginated');
    },
    prev : function(el) {
      var pages = pgMe.set(el);
      pgMeCount = Math.max(pgMeCount - 1,0);
      pgMe.go(pgMeCount,pages);
    },
    next : function(el) {
      var pages = pgMe.set(el);
      pgMeCount = Math.min(pages.length - 1,pgMeCount + 1);
      pgMe.go(pgMeCount,pages);
    },
    go : function(nth,targets) {
      var count = targets.length;
      for (i = 0; i < count; i++) {
        targets[i].classList.remove('is-active');
      }
      targets[nth].classList.add('is-active');
    }
  };

  //grouping on the menu
  $(foodsections).find(":header").each(function( i ) {
    $(this).addClass('menu-single-title').nextUntil(":header").wrapAll('<div id="single' + i + '" class="menu-single" />');
  })


}

function goTab(n) {

  for (i = 0; i < menuCount; i++) {
    foodtabs[i].classList.remove('is-active');
    foodsections[i].classList.remove('is-active');
  }
  pgMeCount = 0; //reseting the pageception
  foodtabs[n].classList.add('is-active');
  foodsections[n].classList.add('is-active');
}


//$.fn.extend({
//  groupl : function (wrappingElement, selector) {
//    wrappingElement = typeof wrappingElement !== 'undefined' ? wrappingElement : '<div />';
//    selector = typeof selector !== 'undefined' ? selector :  this.find(":header");
//
//    this.each(function () {
//      this.nextUntil(selector).wrapAll(wrappingElement);
//    });
//    return this;
//  }
//});

/*//base size (min);
$break-xs: 320px;
//tablet
$break-s: 481px;
//screen
$break-m: 1030px;
//hd screen
$break-l: 1240px;*/

////header-toggle
var headToggle = document.getElementById('header-toggle');

if (headToggle) {
  headToggle.onclick = function() {
    headToggle.classList.toggle('is-active');
    headToggle.nextElementSibling.classList.toggle('is-active');
  };
}

//https://css-tricks.com/snippets/jquery/smooth-scrolling/
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 50
        }, 1000);
        return false;
      }
    }
  });
});


function throttle(fn, threshhold, scope) {
  threshhold || (threshhold = 250);
  var last,
      deferTimer;
  return function () {
    var context = scope || this;

    var now = +new Date,
        args = arguments;
    if (last && now < last + threshhold) {
      // hold on to it
      clearTimeout(deferTimer);
      deferTimer = setTimeout(function () {
        last = now;
        fn.apply(context, args);
      }, threshhold);
    } else {
      last = now;
      fn.apply(context, args);
    }
  };
}

//sticky nav
var headNav = document.getElementById("js_navSticky"),
    headNavChild = headNav.firstElementChild,
    headNavLinks = headNav.getElementsByClassName("navbar-item");

window.onscroll = throttle(
  function() {

    if (headNav.getBoundingClientRect().top < 0) {
      headNav.style.height = headNavChild.clientHeight + "px";
      headNavChild.classList.add('is-fixed');
    } else {
      headNav.style.height = 'auto'
      headNavChild.classList.remove('is-fixed');
    };
}, 30);

