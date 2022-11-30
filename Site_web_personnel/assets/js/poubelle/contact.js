document.addEventListener('DOMContentLoaded', function() {
    window.onscroll = function() {
      document.getElementById("button-return-main").className = (window.pageYOffset > 100) ? "button-return-visible" : "button-return-invisible";
    };
  });