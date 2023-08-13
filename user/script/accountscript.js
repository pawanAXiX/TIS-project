function register() {
  let log = document.getElementById("login");
  let reg = document.getElementById("register");
  reg.style.display = "grid";
  log.style.display = "none";

  document.getElementById("opt-reg").style.borderBottom = "none";
  document.getElementById("opt-reg").style.borderLeft = "none";
  document.getElementById("opt-login").style.borderBottom = " 2px solid white";
  document.getElementById("opt-login").style.borderRight = " 2px solid white";
}
function login() {
  let log = document.getElementById("login");
  let reg = document.getElementById("register");
  log.style.display = "grid";
  reg.style.display = "none";
  document.getElementById("opt-login").style.borderBottom = "none";
  document.getElementById("opt-login").style.borderRight = "none";
  document.getElementById("opt-reg").style.borderBottom = " 2px solid white";
  document.getElementById("opt-reg").style.borderLeft = " 2px solid white";
}
