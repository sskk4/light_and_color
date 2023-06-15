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


///////////////////////////////


document.addEventListener("DOMContentLoaded", function() {
    var heart = document.querySelector(".heart");

    var isLiked = localStorage.getItem("isLiked");
    if (isLiked === "true") {
      heart.classList.add("is-active");
    }

    heart.addEventListener("click", function() {
      heart.classList.toggle("is-active");


      if (heart.classList.contains("is-active")) {
        localStorage.setItem("isLiked", "true");
        addToTable();
      } else {
        localStorage.removeItem("isLiked");
        deleteFromTable();
      }
    });
  });



              function addToTable() {
    var currentUrl = window.location.pathname;
    var product_id = currentUrl.split('/').pop();

    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    var formData = new FormData();

    formData.append('product_id', product_id);

    fetch('/products/' + product_id +'/like', {
      method: 'POST',
      body: formData,
      headers: {
          'X-CSRF-TOKEN': csrfToken
      }
    })

    .then(function(response) {
      if (response.ok) {
        console.log('Rekord został dodany do tabeli.');
      } else {
        console.log('Wystąpił błąd podczas dodawania rekordu do tabeli.');
      }
    })
    .catch(function(error) {
      console.log('Wystąpił błąd podczas komunikacji z serwerem.', error);
    });

  }

  function deleteFromTable() {
    var currentUrl = window.location.pathname;
    var product_id = currentUrl.split('/').pop();
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch('/products/' + product_id +'/dislike', {
      method: 'DELETE',
      headers: {
        'X-CSRF-TOKEN':  csrfToken
      }
    })


    .then(function(response) {
      if (response.ok) {
        console.log('Rekord został usunięty z tabeli.');
      } else {
        console.log('Wystąpił błąd podczas usuwania rekordu z tabeli.');
      }
    })
    .catch(function(error) {
      console.log('Wystąpił błąd podczas komunikacji z serwerem.', error);
    });

  }
