<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Makito Tools</title>

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

        <header>
            <nav>
                <ul class="menu">
                    <li>
                        <a href="#">Главная</a>
                    </li>
                    <li>
                        <a href="#">Продукция</a>
                    </li>
                    <li>
                        <a href="#">О нас</a>
                    </li>
                    <li>
                        <a href="#">Контакты</a>
                    </li>
                </ul>
            </nav>
        </header>
        
        <script>
             // Проверка на поддержку service worker
            if('serviceWorker' in navigator) {
                navigator.serviceWorker
                    .register('/sw.js')
                    .then(function() { console.log("Service Worker Registered"); });
            }
        </script>
        <script src="/public/scripts/main.js"></script>
        <script src="/public/scripts/bgSlider.js"></script>
    </body>
</html>