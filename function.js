/*or recupere les id*/
var btnPopupMemoire = document.getElementById("btnPopupMemoire");
var btnPopupReaction = document.getElementById("btnPopupReaction");
var btnPopupReproduction = document.getElementById("btnPopupReproduction");
var btnPopupTonalite = document.getElementById("btnPopupTonalite");
var overlay = document.getElementById("overlay");
var btnClose = document.getElementById("btnClose");

/*nous ajoutons le gestionaire de eventements*/
btnPopupMemoire.addEventListener("click",openModalMemoire);
btnPopupReaction.addEventListener("click",openModalReaction);
btnPopupReproduction.addEventListener("click",openModalReproduction);
btnPopupTonalite.addEventListener("click",openModalTonalite);

btnCloseMemoire.addEventListener("click",closePopupMemoire);
btnCloseReaction.addEventListener("click",closePopupReaction);
btnCloseReproduction.addEventListener("click",closePopupReproduction);
btnCloseTonalite.addEventListener("click",closePopupTonalite);



function openModalMemoire(){
    overlayMemoire.style.display = "block";
}

function closePopupMemoire(){
    overlayMemoire.style.display ="none";
}

function openModalReaction(){
  overlayReaction.style.display = "block";
}
function closePopupReaction(){
  overlayReaction.style.display ="none";
}

function openModalReproduction(){
  overlayReproduction.style.display = "block";
}
function closePopupReproduction(){
  overlayReproduction.style.display ="none";
}

function openModalTonalite(){
  overlayTonalite.style.display = "block";
}
function closePopupTonalite(){
  overlayTonalite.style.display ="none";
}