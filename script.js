
// apparition  de la modale de contact au clic de Contacter et disparition au clic de l'overlay
const modalContainer = document.querySelector(".modal-container");
const modalTriggers = document.querySelectorAll(".menu-item-8");
const overlay = document.querySelector(".overlay");

modalTriggers.forEach(trigger => trigger.addEventListener("click", toggleModal));
overlay.addEventListener("click", closeOverlay);

function toggleModal() {
  modalContainer.classList.toggle("active");
}

function closeOverlay() {
  modalContainer.classList.remove("active");
}


// pour relier la modale de contact au bouton Contact sur l'accueil 
const contactTrigger = document.querySelector("#contact-me");

if(contactTrigger){
	contactTrigger.addEventListener("click", toggleModal);
	}

function toggleModal(event) {
  event.preventDefault();
  modalContainer.classList.toggle("active");
}



// écouteur d'événement pour gérer le survol des images
  var thumbnails = document.querySelectorAll('.thumbnail');

  thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('mouseenter', function() {
      thumbnail.classList.add('is-hovered');
    });

    thumbnail.addEventListener('mouseleave', function() {
      thumbnail.classList.remove('is-hovered');
    });
  });


  // écouteur d'événement pour ouvrir la page single_photo.php au clic sur l'icône de l'œil
  var eyeIcons = document.querySelectorAll('.thumbnail-hover__eye');
  eyeIcons.forEach(eyeIcon => {
    eyeIcon.addEventListener('click', function(event) {
      event.stopPropagation(); // Empêcher la propagation de l'événement aux éléments parents
      var thumbnail = event.target.closest('.thumbnail');
      var photoId = thumbnail.dataset.id;
      var photoLink = thumbnail.querySelector('.thumbnail-hover__link').href;
      if (!photoLink) {
        // Si aucun lien n'est défini sur l'icône de l'œil, ouvrir la lightbox
        showLightbox(photoId);
      }
    });
  });

  
  
  // pour afficher le menu au clic du burger 

  const burger = document.querySelector('.burger');
  const menu = document.querySelector('.menu');
  const main = document.querySelector('.main-body');

  burger.addEventListener('click', () => {
      burger.classList.toggle('active');                         // ajout de la classe active au burger
      menu.classList.toggle('is-active');                         //affichage du menu au clic du burger     
      if(main){main.classList.toggle('fixed');}                             // ajout de la classe fixe pour masquer le main lorsque le menu burger est activé
  });


  // pour que le menu soit caché au clic des titres 
const navLinks = document.querySelectorAll('.menu li');

navLinks.forEach(link => {
  link.addEventListener('click', () => {
    document.querySelector('.menu').classList.remove('is-active');
    burger.classList.remove('active');
    main.classList.remove('fixed');
  });
});