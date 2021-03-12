const CACHE_NAME = "aipt-uin-suska";
const urlsToCache = [
    "/",
    "/aipt-uin-suska/",
    "/aipt-uin-suska/index.php",
    "/aipt-uin-suska/manifest.json",
    "/aipt-uin-suska/img/uin128.png",
    "/aipt-uin-suska/img/uin256.png",
    "/aipt-uin-suska/img/uin512.png",
    "/aipt-uin-suska/img/logo-uin.png",
    "/aipt-uin-suska/img/visi.png",
    "/aipt-uin-suska/img/misi.png",
    "/aipt-uin-suska/img/tujuan.png",
    "/aipt-uin-suska/img/header.png",
    "/aipt-uin-suska/img/fasilitas/1.jpg",
    "/aipt-uin-suska/img/fasilitas/2.jpg",
    "/aipt-uin-suska/img/fasilitas/3.jpg",
    "/aipt-uin-suska/img/fasilitas/4.jpg",
    "/aipt-uin-suska/img/fasilitas/5.jpg",
    "/aipt-uin-suska/img/fasilitas/6.jpg",
    "/aipt-uin-suska/img/fasilitas/7.jpg",
    "/aipt-uin-suska/img/fasilitas/8.jpg",
    "/aipt-uin-suska/img/fasilitas/9.jpg",
    "/aipt-uin-suska/img/fasilitas/10.jpg",
    "/aipt-uin-suska/img/fasilitas/11.jpg",
    "/aipt-uin-suska/img/fasilitas/12.jpg",
    "/aipt-uin-suska/img/fasilitas/13.jpg",
    "/aipt-uin-suska/data/frame3a3b.json",
    "/aipt-uin-suska/data/borang3b.json",
    "/aipt-uin-suska/data/standar1.json",
    "/aipt-uin-suska/data/standar2.json",
    "/aipt-uin-suska/data/standar3.json",
    "/aipt-uin-suska/data/standar4.json",
    "/aipt-uin-suska/data/standar5.json",
    "/aipt-uin-suska/data/standar6.json",
    "/aipt-uin-suska/data/standar7.json",
    "/aipt-uin-suska/css/bootstrap.min.css",
    "/aipt-uin-suska/css/bootstrap.min.css.map",
    "/aipt-uin-suska/css/metisMenu.min.css",
    "/aipt-uin-suska/css/metisMenu.min.css.map",
    "/aipt-uin-suska/css/mm-folder.css",
    "/aipt-uin-suska/css/style.css",
    "/aipt-uin-suska/js/jquery-3.4.1.min.js",
    "/aipt-uin-suska/js/bootstrap.min.js",
    "/aipt-uin-suska/js/bootstrap.min.js.map",
    "/aipt-uin-suska/js/metisMenu.min.js",
    "/aipt-uin-suska/js/metisMenu.min.js.map",
    "/aipt-uin-suska/service-worker.js",
    "https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css"
];

self.addEventListener("install", event => {
    event.waitUntil(
        caches.open(CACHE_NAME).then(cache => cache.addAll(urlsToCache))
    );
});

self.addEventListener("fetch", event => {
    const base_url = "https://apps-tif.uin-suska.ac.id/aipt-uin-suska/";
    //const base_url = "http://localhost/aipt-uin-suska";
    if (event.request.url.indexOf(base_url) > -1) {
        event.respondWith(
            caches.open(CACHE_NAME)
                .then(cache => fetch(event.request)
                    .then(response => {
                        cache.put(event.request.url, response.clone());
                        return response;
                    }))
        );
    } else {
        event.respondWith(
            caches.match(event.request).then(response => response || fetch(event.request))
        )
    }
});

//mekanisme penghapusan cache yang lama agar tidak membebani pengguna
self.addEventListener("activate", event => {
    event.waitUntil(caches.keys()
        .then(cacheNames => Promise.all(
            cacheNames.map(cacheName => {
                if (cacheName !== CACHE_NAME) {
                    console.log(`ServiceWorker: cache ${cacheName} dihapus`);
                    return caches.delete(cacheName);
                }
            })
        ))
    );
});