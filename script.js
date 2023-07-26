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


// set up text to print, we only have one line now
var aText = new Array("Work with me!");
var iSpeed = 100; // time delay of print out
var iIndex = 0; // start printing array at this position
var iArrLength = aText[0].length; // the length of the text array
var iScrollAt = 20; // start scrolling up at this many lines

var iTextPos = 0; // initialise text position
var sContents = ''; // initialise contents variable
var iRow; // initialise current row

function typewriter() {
  sContents = ' ';
  iRow = Math.max(0, iIndex - iScrollAt);
  var destination = document.getElementById("typedtext");

  while (iRow < iIndex) {
    sContents += aText[iRow++] + '<br />';
  }
  destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";
  if (iTextPos++ == iArrLength) {
    iTextPos = 0;
    iIndex++;
    if (iIndex != aText.length) {
      iArrLength = aText[iIndex].length;
      setTimeout(typewriter, 500);
    }
  } else {
    setTimeout(typewriter, iSpeed);
  }
}

// Call the typewriter function when the DOM is ready
document.addEventListener("DOMContentLoaded", typewriter);
