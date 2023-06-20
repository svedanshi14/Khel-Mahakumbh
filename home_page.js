/* Dialog Box */ 
window.onload = function() {
    var dialog = document.getElementById("dialog");
    dialog.style.display = "block";
}

function closeDialog() {
    var dialog = document.getElementById("dialog");
    dialog.style.display = "none";
}

/* Dialog Box on clicking logo */ 
function openDialog() {
    var dialogBox = document.getElementById("dialog");
    dialogBox.style.display = "block";
}

/* Slide show */ 
document.addEventListener("DOMContentLoaded", function() {
  var images = document.querySelectorAll(".slideshow img");
  var currentIndex = 0;
  var interval = setInterval(changeImage, 3000); // Change image every 3 seconds

  function changeImage() {
      images[currentIndex].classList.remove("active");
      currentIndex = (currentIndex + 1) % images.length;
      images[currentIndex].classList.add("active");
  }
});

/* About */
document.addEventListener("DOMContentLoaded", function() {
    var aboutButton = document.getElementById("btn_explore");
    aboutButton.addEventListener("click", function() {
        window.location.href = "about.html";
    });
});



