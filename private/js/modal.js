let a = document.querySelectorAll("a.modal-trigger");
let modals = document.querySelectorAll('.modal');
let spans = document.getElementsByClassName("close");
let container = document.querySelector('.container');

for (let i = 0; i < a.length; i++) {
    a[i].onclick = function(e) {
        e.preventDefault();
        container.classList.add('is-blurred');
        setTimeout(function() {
            let modal = document.querySelector(e.target.getAttribute('href'));
            modal.style.display = "block";
        }, 100);
    }
}

for (let i = 0; i < spans.length; i++) {
    spans[i].onclick = function() {
        for (let index in modals) {
            if (typeof modals[index].style !== 'undefined') {
                modals[index].style.display = "none";
                container.classList.remove('is-blurred');
            }
        }
    }
}

window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
        for (let index in modals) {
            if (typeof modals[index].style !== 'undefined') {
                modals[index].style.display = "none";
                container.classList.remove('is-blurred');
            }
        }
    }
}