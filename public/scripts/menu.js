var menuBtn = document.querySelector('.menuBtn');

menuBtn.addEventListener('click', showMenu);

function showMenu() {
    alert(222);
    menuBtn.setAttribute('onclick', `
        alert(123);
    `);
}
