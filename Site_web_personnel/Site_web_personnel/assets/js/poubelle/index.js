// Execute a function when the window is being scrolled
window.onscroll = function () { scrollFunction() };

// When the user scrolls down 20px from the top of the document, show the button
function scrollFunction() {
  // Get the button
    var button = document.getElementById("scrollToTop");

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        button.style.opacity = 1;
        button.style.visibility = "visible";
    } else {
        button.style.opacity = 0;
        button.style.visibility = "hidden";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

