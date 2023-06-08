function showImage(img) {
    var fullImageOverlay = document.getElementById('fullImageOverlay');
    var fullImage = document.getElementById('fullImage');

    fullImage.src = img.src;
    fullImageOverlay.style.display = 'block';
}

function closeImage() {
    var fullImageOverlay = document.getElementById('fullImageOverlay');
    fullImageOverlay.style.display = 'none';
}


document.addEventListener("DOMContentLoaded", function() {
    var heart = document.querySelector(".heart");
    heart.addEventListener("click", function() {
      heart.classList.toggle("is-active");
    });
  });