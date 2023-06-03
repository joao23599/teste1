const modal = document.querySelector('.modal-container')

function openModal() {
  modal.classList.add('active')
}

function closeModal() {
  modal.classList.remove('active')
}

function rotateCard() {
  var card = document.getElementById('card');
  card.style.transform = 'rotateY(180deg)';
}

function rotateCard2() {
  var card = document.getElementById('card');
  card.style.transform = 'rotateX(360deg)';
}