  // init controller
var controller = new ScrollMagic.Controller();
//
// var event1 = document.getElementById("event1");
// var event2 = document.getElementById("event2");
// var event3 = document.getElementById("event3");
// var event4 = document.getElementById("event4");
var Dur100 = "100%";
var Dur200 = "200%";
//
// var imgOverclock = document.getElementById("overclock-img");
// var imgQuiz = document.getElementById("quiz-img");
// var pinWrapper = document.getElementsByClassName("pinWrapper");
// var Event1 = document.getElementsByClassName("event event1");
// var Event2 = document.getElementsByClassName("event event2");
// var Event3 = document.getElementsByClassName("event event3");
// var Event4 = document.getElementsByClassName("event event4");



var scene = new ScrollMagic.Scene();
scene.setPin(".nav");
scene.addTo(controller);


var scene = new ScrollMagic.Scene();
scene.triggerElement(".event.event2");
scene.triggerHook("onEnter");
scene.duration(Dur100);
scene.setPin(".events-page .event.event1 .pinWrapper", {pushFollowers: false});
scene.addTo(controller);

var scene = new ScrollMagic.Scene();
scene.triggerElement(".event.event2");
scene.triggerHook("onEnter");
scene.duration(Dur100);
scene.setPin(".events-page .event.event1 .pinWrapper2", {pushFollowers: false});
scene.addTo(controller);


var scene = new ScrollMagic.Scene();
scene.triggerElement(".event.event2");
scene.triggerHook("onEnter");
scene.duration(Dur200);
scene.setPin(".events-page .event.event2 .pinWrapper ", {pushFollowers: false});
scene.addTo(controller);

var scene = new ScrollMagic.Scene({tweenChanges: true});
scene.triggerElement(".event.event3");
scene.triggerHook("onEnter");
scene.duration(Dur200);
scene.setPin(".events-page .event.event3 .pinWrapper", {pushFollowers: false});
scene.addTo(controller);

var scene = new ScrollMagic.Scene({tweenChanges: true});
scene.triggerElement(".event.event4");
scene.triggerHook("onEnter");
scene.duration("100%");
scene.setPin(".events-page .event.event4 .pinWrapper", {pushFollowers: false});
scene.addTo(controller);



//
//
// function gotoevents(){
//
//   var landingpage = document.getElementById("landing-page");
//   var eventspage = document.getElementById("event1");
//
//   landingpage.style.transform="translateY(-100%)";
//   landingpage.style.transition="transform 500ms ease-in";
//   eventspage.style.transform="translateY(-100%)";
//   eventspage.style.transition="transform 500ms ease-in";
//
// }

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


// Landing Page Animation
var logoAnimTL = new TimelineLite();

logoAnimTL.add(TweenMax.to("#anim-logo",2,{strokeDashoffset: 1110}),0);
logoAnimTL.add(TweenMax.to("#logoPath",3, {css:{fill:"rgba(0,0,0,0.7)",stroke:"transparent"}}),1.9);
logoAnimTL.add(TweenMax.to("#anim-logo",1,{css:{left:"35%"}}),3);
logoAnimTL.add(TweenMax.to("#anim-letters",1,{opacity:0.7}),3.5);
logoAnimTL.add(TweenMax.from("#cedept",5,{opacity:0}),0);




var modalAnimTL = new TimelineLite();

$( ".popup1" ).click(function() {
  $( ".event1-modal" ).toggleClass( "is-notvisible" );
  $("html").toggleClass("disablescroll");
  modalAnimTL.add(TweenMax.from(".event1-modal",0.5,{css:{opacity: 0,top:"-50%"}}));
});

$( ".popup2" ).click(function() {
  $( ".event2-modal" ).toggleClass( "is-notvisible" );
  $("html").toggleClass("disablescroll");
  modalAnimTL.add(TweenMax.from(".event2-modal",0.5,{css:{opacity: 0,top:"150%"}}));
});

$( ".popup3" ).click(function() {
  $( ".event3-modal" ).toggleClass( "is-notvisible" );
  $("html").toggleClass("disablescroll");
  modalAnimTL.add(TweenMax.from(".event3-modal",0.5,{css:{opacity: 0,left:"150%"}}));
});

$( ".popup4" ).click(function() {
  $( ".event4-modal" ).toggleClass( "is-notvisible" );
  $("html").toggleClass("disablescroll");
  modalAnimTL.add(TweenMax.from(".event4-modal",0.5,{css:{opacity: 0,left:"-50%"}}));
});
$( ".popup5" ).click(function() {
  $( ".event5-modal" ).toggleClass( "is-notvisible" );
  $("html").toggleClass("disablescroll");
  modalAnimTL.add(TweenMax.from(".event5-modal",0.5,{css:{opacity: 0,top:"50%"}}));

});
$( ".popup6" ).click(function() {
  $( ".event6-modal" ).toggleClass( "is-notvisible" );
  $("html").toggleClass("disablescroll");
  modalAnimTL.add(TweenMax.from(".event6-modal",0.5,{css:{opacity: 0,top:"-50%"}}));
});


$(function() {$( "#tabs" ).tabs();});
