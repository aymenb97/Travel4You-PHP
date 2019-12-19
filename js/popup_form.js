  var inscrire = document.getElementById('inscrire');

  var btn = document.getElementById("inscrire-btn");

  var span = document.getElementsByClassName("close")[0];

  btn.onclick = function () {
      inscrire.style.display = "flex";
  }

  span.onclick = function () {
      inscrire.style.display = "none";
  }

  window.addEventListener("click", function (event) {
      if (event.target == inscrire) {
          inscrire.style.display = "none";
      }
  });

  var ident = document.getElementById('identifier');

  var btn = document.getElementById("identifier-btn");

  var span = document.getElementsByClassName("close")[1];


  btn.onclick = function () {
      identifier.style.display = "flex";
  }


  span.onclick = function () {
      identifier.style.display = "none";
  }

  window.addEventListener("click", function (event) {
      if (event.target == ident) {
          ident.style.display = "none";
      }
  });
  window.onscroll = function () {
      myFunction()
  };

  var navbar = document.getElementById("navbar");
  var topbar = document.getElementById("nav-stick");
  var sticky = navbar.offsetTop+20;

  function myFunction() {
      if (window.pageYOffset >= sticky) {
          topbar.classList.add("add-top")
          navbar.classList.add("sticky");
           navbar.classList.remove("nav-top");
      } else {
          topbar.classList.remove("add-top")
          navbar.classList.add("nav-top");
          navbar.classList.remove("sticky");
      }
  }
