
var navbar = document.querySelector('.navbar');

window.addEventListener('scroll', function() {
  if (window.pageYOffset > 0) {
    navbar.classList.add('navbar-scrolled');
  } else {
    navbar.classList.remove('navbar-scrolled');
  }
});


function myFunction(){
  var x = document.getElementById("mytoggler");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

