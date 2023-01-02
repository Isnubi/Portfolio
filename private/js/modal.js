let a = document.querySelectorAll("a.modal-trigger");
let modals = document.querySelectorAll('.modal');
let spans = document.getElementsByClassName("modal-close");
let container = document.querySelector('.container');

function openModal(e) {
    e.preventDefault();
    if (!window.matchMedia("(max-width: 768px)").matches) { container.classList.add('is-blurred'); }
    setTimeout(function() { document.querySelector(e.target.getAttribute('href')).style.display = "block"; }, 100);
}

function closeModal() {
    for (let index in modals) { if (typeof modals[index].style !== 'undefined') {
        modals[index].style.display = "none";
        container.classList.remove('is-blurred');
    } }
}

function closeModalOnClickOutside(event) { if (event.target.classList.contains('modal')) { closeModal(); } }

for (let i = 0; i < a.length; i++) { a[i].onclick = openModal; }
for (let i = 0; i < spans.length; i++) { spans[i].onclick = closeModal; }

window.onclick = closeModalOnClickOutside;