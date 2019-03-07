importScripts('/cache-polyfill.js');


self.addEventListener('install', function(e) {
 e.waitUntil(
   caches.open('title').then(function(cache) {
     return cache.addAll([
       '/',
       '/index.php',
       '/public/images/miniLogoWebnet.png',
       '/public/images/logoWebnet.png',
       '/public/scripts/main.js',
       '/public/styles/style.css',
       '/public/styles/mobileStyle.css',
       'public/images/sleder/bgSliderOne.jpg',
       'public/images/slider/bgSliderOne.jpg',
       'public/images/slider/bgSliderOne.jpg'
     ]);
   })
 );
});

 // Кэширование запросов с родительской страници
self.addEventListener('fetch', function(event) {

  console.log(event.request.url);
  
  event.respondWith(
  
    caches.match(event.request).then(function(response) {
      
      return response || fetch(event.request);
      
    })
  );
});