<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f5f1e9">
    <meta name="description" content="@yield('description', 'HIBYRA Coffee & Study Space — kopi, makanan, Wi-Fi, dan tempat nyaman untuk fokus di Surabaya.')">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <title>@yield('title', 'HIBYRA Coffee & Study Space — Surabaya')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="announcement-bar">
        <span>Your coffee & study spot in Surabaya</span>
        <span class="announcement-separator" aria-hidden="true">✳</span>
        <span>Kopi, comfort food & ruang untuk fokus</span>
    </div>

    <header class="site-header">
        <div class="header-inner">
            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation" aria-label="Buka navigasi">
                <span></span><span></span>
            </button>
            <a class="wordmark" href="/" aria-label="HIBYRA Coffee House, beranda">
                <span class="brand-name">HIBYRA<span class="wordmark-mark">✳</span></span>
                <span class="brand-descriptor">COFFEE · FOOD · FOCUS</span>
            </a>
            <nav class="primary-navigation" id="primary-navigation" aria-label="Navigasi utama">
                <a class="{{ request()->is('/') ? 'is-active' : '' }}" href="/">Beranda</a>
                <a class="{{ request()->is('menu*') || request()->is('product*') ? 'is-active' : '' }}" href="/menu">Menu</a>
                <a class="{{ request()->is('about*') ? 'is-active' : '' }}" href="/about">Cerita kami</a>
                <a class="{{ request()->is('visit*') ? 'is-active' : '' }}" href="/visit">Kunjungi</a>
            </nav>
            <a class="header-cta" href="/visit#reservasi">Reservasi meja <span aria-hidden="true">↗</span></a>
        </div>
    </header>

    <main id="main-content">@yield('content')</main>

    <footer class="site-footer">
        <div class="footer-main">
            <div class="footer-brand-block">
                <a class="wordmark footer-wordmark" href="/" aria-label="HIBYRA Coffee House, beranda">
                    <span class="brand-name">HIBYRA<span class="wordmark-mark">✳</span></span>
                    <span class="brand-descriptor">COFFEE · FOOD · FOCUS</span>
                </a>
                <p>Ruang nyaman untuk<br>fokus, makan, dan rehat.</p>
            </div>
            <div class="footer-column">
                <span class="footer-heading">Jelajahi</span>
                <a href="/menu">Menu kami</a><a href="/about">Cerita HIBYRA</a><a href="/visit">Lokasi & jam buka</a>
            </div>
            <div class="footer-column">
                <span class="footer-heading">Buat harimu produktif</span>
                <span>Wi-Fi & colokan tersedia</span><span>Meja untuk sendiri atau ramai-ramai</span><a href="/visit#reservasi">Reservasi & pertanyaan</a>
            </div>
            <div class="footer-note">
                <span class="footer-heading">Say hello</span>
                <p>Ada yang ingin ditanyakan atau direncanakan? Kami senang mendengarnya.</p>
                <a class="footer-link" href="mailto:halo@hibyra.id">halo@hibyra.id <span aria-hidden="true">↗</span></a>
                <a class="footer-link" href="https://instagram.com" target="_blank" rel="noreferrer">Instagram <span aria-hidden="true">↗</span></a>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© {{ date('Y') }} HIBYRA Coffee House</span><span>Made for good work & good days.</span><a href="/visit">Surabaya, Jawa Timur</a>
        </div>
    </footer>
</body>
</html>
