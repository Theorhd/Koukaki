/* SectionView.js */
/*!! Dépendance a Jquery !!*/

document.addEventListener('DOMContentLoaded', function() {
    // Sélectionne toutes les sections de la page
const sections = document.querySelectorAll('section');
const totalSections = sections.length;
let sectionsVues = 0;
let isStoryVisible = false;
let isStudioVisible = false;
let isOscarVisible = false;

// Fonction pour vérifier quelles sections sont visibles à l'écran
function checkVisibility() {
  const windowHeight = window.innerHeight;

  sections.forEach((section) => {

    const bounding = section.getBoundingClientRect();
    const sectionHeight = bounding.bottom - bounding.top;
    const isVisible = (
      bounding.top + sectionHeight * 0.1 <= windowHeight &&
      bounding.bottom - sectionHeight * 0.1 >= 0 &&
      !section.dataset.viewed
    );

    // Vérifie si la section est visible à l'écran
    if (isVisible) {
      console.log(`La section ${section.id} est visible.`);
      // Vérifie si la section est la section "story"
      if (section.id === 'story' && !isStoryVisible) {
        isStoryVisible = true;
        animateSectionStory();

        setTimeout(function() {
            animateTitleStory();
            animateTitleCharacter();
        }, 1500);

      }
      // Vérifie si la section est la section "studio"
      if (section.id === 'studio' && !isStudioVisible) {
        isStudioVisible = true;
        animateSectionStudio();

        setTimeout(function() {
            animateTitleStudio();
        }, 1500);

      }
      // Vérifie si la section est la section "oscar"
      if (section.id === 'oscar' && !isOscarVisible) {
        isOscarVisible = true;
        animateSectionOscar();
      }
      // Marquage de la section comme vue pour éviter de la compter plusieurs fois
      section.dataset.viewed = true;
      // Incrémente le nombre de sections vues
      sectionsVues++;
      // Vérifie si toutes les sections ont été vues
      if (sectionsVues === totalSections) {
        console.log('Toutes les sections ont été vues.');
      }
    }
  });
}
document.addEventListener('scroll', checkVisibility); // EventListener au scroll de la page
checkVisibility(); //charger le script au chargement de la page dans le cas ou une section est déjà visible dès le chargement

/* Fonctions pour animer les titres et les sections */
// Story
function animateTitleStory() { // animation du titre de la section story
  if (isStoryVisible === true) {
      jQuery('.fiuStory').fadeIn(1500).animate({
          top: '-30px',
          opacity: 1
      }, 1000);
  }
}
function animateSectionStory() { // animation de la section story
  if (isStoryVisible === true) {
      jQuery('.fadeInStory').animate({
          opacity: 1
      }, 1000);
  }
}
function animateTitleCharacter() { // animation du titre de la section character
  if (isStoryVisible === true) {
    setTimeout(function() {
        jQuery('.fiuCharacters').animate({
          opacity: 1,
          top: '-30px'
        }, 1000);
    } , 1000);
    }
}
// Studio 
function animateSectionStudio() { // animation de la section studio
  if (isStudioVisible === true) {
      jQuery('.fadeInStudio').animate({
          opacity: 1
      }, 1500);
  }
}
function animateTitleStudio() { // animation du titre de la section studio (avec un décalage entres les 2 mots)
  if (isStudioVisible === true) {
      jQuery('#studioSpan1').animate({
          opacity: 1,
          top: '0px'
      }, 1000);
      setTimeout(function() {
        jQuery('#studioSpan2').animate({
          opacity: 1,
          top: '0px'
        }, 1000); 
      }, 600); 
  }
}
// Oscar
function animateSectionOscar() { // animation de la section oscar
  if (isOscarVisible === true) {
      jQuery('.fadeInOscar').animate({
          opacity: 1
      }, 1500);
  }
}
});

/**/
/* */

/* charactersSwiper.js */
/*!! Dépendance a SwiperJS !!*/
var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 25,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
  });  
/* */

/* menuFullPage.js */
document.addEventListener('DOMContentLoaded', () => {
    let menuToggle = document.querySelector('#menuBurger');

    let overlayMenu = document.querySelector('.menuFullPage');
    let menuLink = document.querySelectorAll('#menuLink');

    /* Fonctions d'ouverture et de fermeture */
    function overlayMenuOpen() {
        overlayMenu.style.display = 'flex';
        setTimeout(() => {
            overlayMenu.classList.add('open');
        }, 0);
    }
    function overlayMenuExit() {
        overlayMenu.classList.remove('open');
        setTimeout(() => {
            overlayMenu.style.display = 'none';
        }, 500); 
    }
    /* */
    /* Events Listeners */
        menuToggle.addEventListener('click', () => {
            if (overlayMenu.style.display === 'none') {
                overlayMenuOpen();
            }
            else {
                overlayMenuExit();
            }
        });
        menuLink.forEach(link => {
            link.addEventListener('click', () => {
                overlayMenuExit();
            });
        });
    /* */
    });
    /* */

    /* videoCharged */
    /* lancement de la video dans le heroHeader une fois charger */
    document.addEventListener("DOMContentLoaded", (event) => {

        const video = document.getElementById("background-video");
        const banner = document.getElementsByClassName("banner")[0];

        const isMobile = /Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

        if (isMobile) { // Si sur mobile alors pas déclancher la video 
            console.log("L'utilisateur est sur mobile, ne rien changer.");
            return; 
        }
        else {  // Si pas sur mobile alors déclancher la video
            console.log("L'utilisateur n'est pas sur mobile")
            video.addEventListener("loadeddata", (event) => {
                console.log("La vidéo est chargée et prête à être lue.");
                removeImageBG();
            });
        }
        /* Fonction removeImageBG */
        function removeImageBG() {
            setTimeout(function() {
                if (banner.style.backgroundImage !== "flex") {
                    banner.style.backgroundImage = "none";
                    console.log("Background-Image : none;");
                }
              }, 1000);
        }
        /*  */
    });
    /* */

    /* parallax.js */
    /*  Parallax HeroHeader  */
        // Parallax entre le logo et la video
    document.addEventListener("DOMContentLoaded", function() {
        const section = document.querySelector('.banner');
        const video = document.querySelector('.banner video');
        const logo = document.querySelector('.banner img');

        let observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    window.addEventListener('scroll', function() {
                        var scrollPosition = window.scrollY;
                        var parallaxValue = scrollPosition * 0.3;
                
                        if (parallaxValue <= 150) {
                            logo.style.transform = 'translateY(' + parallaxValue + 'px)';
                            video.style.transform = 'translateY(' + -parallaxValue + 'px)';
                        }
                    });
                }
            });
        });
        observer.observe(section); 
    });
    /*    */
    /*  Parallax Nuages (Lieu)  */
        // Parallax entre les nuages et le fond au defilement de la page
    document.addEventListener("DOMContentLoaded", function() {
        const article = document.getElementById('place');
        const bigCloud = document.getElementById('bigCloud');
        const litleCloud = document.getElementById('litleCloud');

        let observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    window.addEventListener('scroll', function() {
                        var scrollPosition = Math.max(0, window.scrollY - entry.boundingClientRect.top);
                        var parallaxValue = scrollPosition * 0.2; 
                
                        if (parallaxValue <= 300) {
                            bigCloud.style.transform = 'translateX(' + -parallaxValue + 'px)';
                            litleCloud.style.transform = 'translateX(' + -parallaxValue + 'px)';
                        }
                    });
                }
            });
        });  
        observer.observe(article); 
    });
    /*    */
    /* */
