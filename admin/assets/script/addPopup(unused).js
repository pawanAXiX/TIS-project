const modal = document.querySelector(".modal-form");
const popUp = document.querySelector(".addPlace");
const popClose = document.getElementById("btn-cancel");
popUp.onclick = function () {
  modal.style.display = "block";
};
popClose.onclick = function () {
  modal.style.display = "none";
  return false;
};
