let currentSlide = 0;
const slides = document.querySelectorAll('.banner-image div');
const totalSlides = slides.length;
const bannerMenu = document.querySelector('.full-banner');

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.remove('active');
    if (i === index) {
      slide.classList.add('active');
    }
  });

  // Show menu when the slide changes
  if (bannerMenu) {
    bannerMenu.classList.add('show');
  }
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % totalSlides;
  showSlide(currentSlide);
}

setInterval(nextSlide, 5000);

// Initial show of the menu after 1 millisecond
setTimeout(() => {
  if (bannerMenu) {
    bannerMenu.classList.add('show');
  }
}, 100);

// Redirect Footer 
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});



// Loader 
document.addEventListener("DOMContentLoaded", function() {
  // Animate loader text and brand text
  gsap.to([
    "#loader-text",
    "#brand-text"
  ], {
    duration: 1.5,
    ease: "power2.inOut",
    repeat: -1,
    yoyo: true,
  });

  // Simulate loading process
  setTimeout(function() {
    // Fade out loader and display content
    gsap.to("#loader", {
      duration: 1,
      opacity: 0,
      onComplete: function() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("content").style.display = "block";
      }
    });

    // Animate main content
    gsap.from("#content", {
      duration: 1,
      opacity: 0,
      y: 50
    });
  }, 3000);
});

// Logo
document.addEventListener("DOMContentLoaded", function() {
  // Animate the logo image
  gsap.from("#logo-img", {
    duration: 1.5,
    opacity: 0,
    scale: 0.7, // Adjust scale as needed
    ease: "back.out(1.7)", // Try a different easing function
    delay: 0.5
  });

  // Animate the horizontal rule
  gsap.from("#logo-hr", {
    duration: 1.5,
    width: 0,
    ease: "power2.out",
    delay: 0.5
  });
});








