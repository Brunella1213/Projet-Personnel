// Animation effet machine à écrire sur "Laissez moi vous parlez un peu de moi !"
window.addEventListener("DOMContentLoaded", (event) => {
  animate_text();
});

function animate_text() 
{
  let delay = 100,
      delay_start = 0,
      contents,
      letters;

  document.querySelectorAll(".text-animate").forEach(function (elem) {
    contents = elem.textContent.trim();
    elem.textContent = "";
    letters = contents.split("");
    elem.style.visibility = 'visible';

    letters.forEach(function (letters, index) {
      setTimeout(function () {
        elem.textContent += letters;
  
      }, delay_start + delay * index);
    });    
    delay_start += delay * letters.length;
  });
}


