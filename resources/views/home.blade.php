@extends('layouts.store')

@section('title', 'HIBYRA Coffee & Study Space — Surabaya')
@section('description', 'Tempat nyaman di Surabaya untuk nugas, kerja, makan, dan menikmati kopi. Wi-Fi, colokan, comfort food, dan ruang untuk fokus.')

@section('content')
    <section class="hero-section page-wrap">
        <div class="hero-copy">
            <div class="eyebrow"><span class="eyebrow-line"></span> Coffee, comfort food & focus</div>
            <h1>Tempat nugas.<br><em>Betah lama.</em></h1>
            <p class="hero-description">Ruang nyaman di Surabaya untuk menyelesaikan tugas, kerja bareng, atau rehat sebentar. Ada Wi-Fi, colokan, kopi, dan makanan yang mengenyangkan.</p>
            <div class="hero-actions"><a class="button button-dark" href="/menu">Lihat menu <span aria-hidden="true">↗</span></a><a class="text-link" href="/visit">Kenali ruang kami</a></div>
            <div class="hero-footnote"><span class="hero-footnote-icon">✳</span><span>Bring your laptop<br>we'll brew the rest</span></div>
        </div>
        <div class="hero-visual">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1600&q=90" alt="Meja kerja dengan laptop dan kopi di ruang yang terang" fetchpriority="high">
            <div class="hero-image-caption"><span>HIBYRA COFFEE & STUDY SPACE</span><span>Your seat to focus</span></div>
            <div class="hero-roundel"><span>FOCUS<br>FUEL<br>REPEAT</span><span class="roundel-star">✳</span></div>
        </div>
        <div class="hero-index">SURABAYA · ID</div>
    </section>

    <section class="promise-strip">
        <div><span class="promise-mark">✳</span><span>Wi-Fi untuk belajar & bekerja</span></div>
        <div><span class="promise-mark">✳</span><span>Colokan di banyak meja</span></div>
        <div><span class="promise-mark">✳</span><span>Kopi, makanan berat & camilan</span></div>
    </section>

    <section class="featured-section page-wrap">
        <div class="section-heading"><div><span class="eyebrow">Coffee break or proper meal</span><h2>Fuel your<br><em>next big idea.</em></h2></div><a class="text-link" href="/menu">Lihat semua menu <span aria-hidden="true">↗</span></a></div>
        <div class="menu-grid featured-grid">
            @foreach ($featuredProducts as $product)
                @include('partials.menu-card', ['product' => $product])
            @endforeach
        </div>
    </section>

    <section class="editorial-section">
        <div class="editorial-image"><img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1500&q=85" alt="Ruang kerja bersama yang terang dengan meja panjang" loading="lazy"><span class="editorial-image-index">YOUR STUDY SPOT · H / 01</span></div>
        <div class="editorial-copy"><span class="eyebrow">A cafe made for getting things done</span><h2>Settle in.<br>Get things <em>done.</em></h2><p>Nugas sendirian, kerja remote, atau diskusi kelompok—pilih sudut yang paling cocok. Pesan kopi dan makanan, buka laptop, lalu fokus selama yang kamu perlukan.</p><div class="editorial-perks"><span><b>01</b> Wi-Fi siap pakai</span><span><b>02</b> Colokan mudah dijangkau</span><span><b>03</b> Meja untuk kerja & diskusi</span></div><a class="text-link" href="/visit">Lihat fasilitas & lokasi <span aria-hidden="true">↗</span></a></div>
    </section>

    <section class="notes-section page-wrap">
        <div class="notes-heading"><span class="eyebrow">A good place for every kind of work</span><h2>Come to focus.<br><em>Stay for lunch.</em></h2><p>Mulai dari deadline pagi sampai diskusi sore, semua kebutuhanmu ada dalam satu tempat.</p></div>
        <div class="values-list">
            <article class="value-row"><span class="value-number">01</span><div><h3>Focus without fuss</h3><p>Wi-Fi dan colokan di area duduk untuk bikin sesi belajar lebih lancar.</p></div><span class="value-mark">✳</span></article>
            <article class="value-row"><span class="value-number">02</span><div><h3>Meals that keep you going</h3><p>Pilihan rice bowl, pasta, snack, dan minuman untuk menemani waktu panjang.</p></div><span class="value-mark">✳</span></article>
            <article class="value-row"><span class="value-number">03</span><div><h3>Your group, your table</h3><p>Tempat untuk belajar sendiri, mengerjakan proyek, atau bertukar ide bersama.</p></div><span class="value-mark">✳</span></article>
        </div>
    </section>

    <section class="quote-section"><span class="quote-mark" aria-hidden="true">“</span><blockquote>Meja yang nyaman, makanan yang proper, dan suasana yang bikin fokus datang lebih mudah.</blockquote><div class="quote-credit"><span class="quote-line"></span><span>THE HIBYRA STUDY SPACE</span></div></section>

    <section class="closing-banner"><div class="closing-image"></div><div class="closing-copy"><span class="eyebrow eyebrow-light">Your next productive day starts here</span><h2>Bawa tugasmu.<br>Kami siapkan <em>kopinya.</em></h2><a class="button button-light" href="/visit">Lihat lokasi Surabaya <span aria-hidden="true">↗</span></a></div></section>
@endsection
