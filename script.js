console.log ("test")

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

contactTrigger.addEventListener("click", toggleModal);

function toggleModal(event) {
  event.preventDefault();
  modalContainer.classList.toggle("active");
}

