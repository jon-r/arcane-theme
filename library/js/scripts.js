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
      var vp = window.innerWidth;
      return (vp < 1180) ?
        foodMenu.querySelectorAll('section.is-active .menu-page') :
        foodMenu.querySelectorAll('section.is-active > .paginated');
//      var vp = window.innerWidth,
//        parent = el.parentElement.parentElement; //grandaddy, technically
//      if (vp < 1180) {
//
//      }
 //     return ;
      //return el.parentElement.parentElement.getElementsByClassName('paginated');
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
  $menuHeads = $(foodsections).find(":header");

  $menuHeads.each(function( i ) {
    $(this).addClass('menu-single-title').nextUntil(":header").wrapAll('<div id="single' + i + '" class="menu-single" />');
  })

  $menuHeads.click(function() {
    $(this).toggleClass('is-active');

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

