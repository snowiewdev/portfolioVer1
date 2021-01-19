//loading
const loader = document.querySelector('.loader');
window.onload = () => {
  setTimeout(()=> {
    loader.style.opacity = "0";
    setTimeout(()=>{
      loader.style.display = "none";

      //AOS library for home page only - animate once
      AOS.init({
        duration: 500,
      });
      $('.pp-section [data-aos]').addClass('aos-animate');
      
      //typedJS typing effect in home page after loading
      var typed = new Typed('.typing', {

        strings: ['designing &amp; developing websites.',
                  'trying out new technologies.',
                  'playing with cats &amp; computers.', 
                  'designing &amp; developing websites^4000'],
        typeSpeed: 40,
        loop: true,
        loopCount: Infinity
      });

    }, 500)
  }, 1500)
}

//pagepilingJS effect
$(document).ready(function() {
	$('#pagepiling').pagepiling({
	    menu: '#menu',
      direction: 'vertical',
      verticalCentered: true,
      sectionsColor: [],
      anchors: ['home', 'about', 'portfolio', 'services', 'contact'],
      scrollingSpeed: 700,
      easing: 'swing',
      loopBottom: true,
      loopTop: false,
      css3: true,
      navigation: {
            'textColor': '#000',
            'bulletsColor': '#000',
            'position': 'right',
            'tooltips': ['Home', 'About', 'Portfolio', 'Services','Contact']
      },
      normalScrollElements: null,
      normalScrollElementTouchThreshold: 5,
      touchSensitivity: 5,
      keyboardScrolling: true,
      sectionSelector: '.section',
      animateAnchor: false,

		//events
		onLeave: function(index, nextIndex, direction){
    },
		afterLoad: function(anchorLink, index){
      $('.pp-section.active [data-aos]').addClass('aos-animate');
    },
		afterRender: function(){
    },
  });
});

document.addEventListener('#pagepiling', function(){}, {passive: false});


//show mobile menu when burger gets clicked
var mobileMenu = document.querySelector('.mobile-menu');

const showMenu = () => {
  mobileMenu.style.width = "100%";
}

const hideMenu = () => {
  mobileMenu.style.width = "0%";
}

//about - story version toggle
var storyBtn = document.querySelectorAll('.version');
var story = document.querySelectorAll('.story');
var currentBtn = 1;

for (let i=0; i< storyBtn.length; i++){

  storyBtn[i].addEventListener('click', ()=> {

    storyBtn[currentBtn].classList.remove('active');
    story[currentBtn].style.display = 'none';

    currentBtn = i;
    storyBtn[currentBtn].classList.add('active');
    story[currentBtn].style.display = 'block';

  });

}

//View more & Go Back Buttons for mobile -- to show more content
var viewMore = document.querySelectorAll('.view-more');
var goBack = document.querySelectorAll('.go-back');
var moreBtn = document.querySelectorAll('.more-button')

for (let i=0; i< viewMore.length; i++){

  viewMore[i].addEventListener('click', ()=> {
    let clickedPage = viewMore[i].parentNode;
    clickedPage.style.display = "none";
    clickedPage.nextElementSibling.style.display = "flex";
  });

  goBack[i].addEventListener('click', ()=>{
    let clickedPage = goBack[i].parentNode;
    clickedPage.style.display = "none";
    clickedPage.previousElementSibling.style.display = "flex";
  });
}

window.addEventListener('resize', ()=> {  // when resize bigger, parent section shd show back
  var newWidth = window.innerWidth;
  if (newWidth > 767) {
    for (let i=0; i < viewMore.length; i++){
      viewMore[i].parentNode.style.display = "flex";
      goBack[i].parentNode.style.display = "flex";
    }
  } else {  // when resize smaller, the 2nd section shd hide
    for (let i=0; i < viewMore.length; i++){
      goBack[i].parentNode.style.display = "none";
    }
  }
});


// portfolio item clicked stay with overlay effect by adding 'stay' class
var portfolioItem = document.querySelectorAll('.portfolio-box');
var overlay = document.querySelectorAll('.overlay');
var portfolio = document.getElementById('portfolio');

for (let i=0; i< portfolioItem.length; i++){

  portfolioItem[i].addEventListener('click',()=>{

    let activeClassIsHere = document.querySelector('.overlay.stay');

    if (activeClassIsHere){ //show one only when clicked
      activeClassIsHere.classList.remove('stay');
      activeClassIsHere.parentNode.style.borderColor="white";
    } 

    overlay[i].classList.add('stay');
    overlay[i].parentNode.style.borderColor="lightgrey";

    setTimeout(()=>{
      overlay[i].classList.remove('stay');
      overlay[i].parentNode.style.borderColor="white";
    }, 10000); // display for 10s and disappear
  })
}

//when click outside portfolio-item, overlay closes
portfolio.addEventListener('mouseup', (e)=> {
  for (let i=0; i< portfolioItem.length; i++){
    if (event.target == portfolioItem[i]) {
      return console.log('matched');
    }
  }
  let activeClassIsHere = document.querySelector('.overlay.stay');
  if (activeClassIsHere){ //show one only when clicked
    activeClassIsHere.classList.remove('stay');
    activeClassIsHere.parentNode.style.borderColor="white";
  } 
})

//get current year for footer
var currentYear = new Date().getFullYear();
document.getElementById('year').innerHTML = currentYear;

//google recaptcha
grecaptcha.ready(function() {
  grecaptcha.execute("YourRecaptchaKey", {action: 'homepage'}).then(function(token) {
      document.getElementById('g-token').value = token;
  });
});

