window.onload = setTimeout(myFunction, 60);
function myFunction() {
  var x = document.getElementById("noti");
  if (x.innerHTML.length > 0) {
    x.className = "show";
    setTimeout(function () {
      x.className = x.className.replace("show", "");
    }, 3000);
  }
}
