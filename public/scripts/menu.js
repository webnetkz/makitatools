var menuBtn = document.querySelector('.menuBtn');

menuBtn.addEventListener('click', showMenu);


function showMenu() {
    var menu = document.querySelector('nav');
    menu.className = 'visible';

    menuBtn.setAttribute('onclick', `
        var menu = document.querySelector('nav');
        menu.className = 'hidden';
    `);

    setTimeout(function() { menuBtn.setAttribute('onclick', '')}, 5000);
}
