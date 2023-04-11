const favoriteBtn = document.querySelector('#favorite-btn');

favoriteBtn.addEventListener('click', function() {
  favoriteBtn.classList.toggle('clicked');
  if (favoriteBtn.classList.contains('clicked')) {
    favoriteBtn.textContent = 'Verwijder Uit Favorieten';
  } else {
    favoriteBtn.textContent = 'Voeg Toe Aan Favorieten';
  }
});
