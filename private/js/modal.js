let a = document.querySelectorAll("a.modal-trigger");
let modals = document.querySelectorAll('.modal');
let spans = document.getElementsByClassName("close");

for (let i = 0; i < a.length; i++) {
    a[i].onclick = function(e) {
        e.preventDefault();
        let modal = document.querySelector(e.target.getAttribute('href'));
        modal.style.display = "block";
    }
}

for (let i = 0; i < spans.length; i++) { spans[i].onclick = function() { for (let index in modals) { if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none"; } } }

window.onclick = function(event) { if (event.target.classList.contains('modal')) { for (let index in modals) { if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none"; } } }