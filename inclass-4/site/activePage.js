// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var acts = header.getElementsByClassName("act");
for (var i = 0; i < acts.length; i++) {
  acts[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}