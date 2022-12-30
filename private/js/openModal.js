function openModal(modalName) {
    let modal = document.getElementById(modalName);
    let container = document.querySelector('.container');

    container.classList.add('is-blurred');
    setTimeout(function() {
        modal.style.display = "block";
    }, 100);

    modal.querySelector('.close').addEventListener('click', function() {
        modal.style.display = "none";
        container.classList.remove('is-blurred');
    });

    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
            container.classList.remove('is-blurred');
        }
    });
}