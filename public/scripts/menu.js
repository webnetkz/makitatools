// Отображение - скрытие меню
function handlerMenu() {
    var menu = document.querySelector('nav');
    var menuClass = menu.getAttribute('class');
    
    switch(menuClass) {
        case 'hiddenMenu':
        menu.setAttribute('class', 'visibleMenu');
        break;

        case 'visibleMenu':
        menu.setAttribute('class', 'hiddenMenu');
        break;
    }
}
// Обновить событие
setInterval(
    `var menu = document.querySelector('nav');
    menu.setAttribute('onclick', 'handlerMenu();');`
,500
);