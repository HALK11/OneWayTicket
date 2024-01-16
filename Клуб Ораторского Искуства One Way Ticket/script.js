document.addEventListener('DOMContentLoaded', function () {
    const subscribeBtn = document.getElementById('subscribeBtn');
    const popupForm = document.getElementById('popupForm');
    const closeBtn = document.getElementById('closeBtn');

    subscribeBtn.addEventListener('click', function () {
        popupForm.style.display = 'block';
    });

    closeBtn.addEventListener('click', function () {
        popupForm.style.display = 'none';
    });

    window.addEventListener('click', function (event) {
        if (event.target === popupForm) {
            popupForm.style.display = 'none';
        }
    });
});