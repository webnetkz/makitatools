<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Makita Tools</title>

        <meta charset="UTF-8">
        <meta name="theme-color" content="rgb(255, 255, 255)">
        <meta name="author" content="TOO WebNet">
        <meta name="description" content="Makita tools занимается поставкой и продажей электро и бензо инструментов бренда Makita.">
        <meta name="keywords" content="Makita, инструменты, бензоинструмент, электроинструмент">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="/public/images/miniLogoWebnet.png" type="image/png">
        <link rel="stylesheet" href="/public/styles/style.css">
        <link rel="stylesheet" href="/public/styles/mobileStyle.css">
        <link rel="manifest" href="/manifest.json">
        
    </head>

    <body>

    <div id="content">
        <header>
            <p class="menuBtn" onclick="handlerMenu();">
                <span class="menuText">МЕНЮ</span>
                <img src="/public/images/menu.svg" alt="bars" class="menuBar">
            </p>
            <nav class="hiddenMenu">
                <ul class="menu">
                    <li class="menuItem">
                        <a href="#">Главная</a>
                    </li>
                    <li class="menuItem">
                        <a href="#">Продукция</a>
                    </li>
                    <li class="menuItem">
                        <a href="#">О нас</a>
                    </li>
                    <li class="menuItem">
                        <a href="#">Контакты</a>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
        <script>
             // Проверка на поддержку service worker
            /*if('serviceWorker' in navigator) {
                navigator.serviceWorker
                    .register('/sw.js')
                    .then(function() { console.log("Service Worker Registered"); });
            }*/
        </script>
        <script src="/public/scripts/main.js"></script>
        <script src="/public/scripts/bgSlider.js"></script>
        <script src="/public/scripts/menu.js"></script>
    </body>
</html>