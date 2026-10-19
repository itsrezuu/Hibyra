@extends('layouts.store')

@section('title', 'Cerita Kami — HIBYRA Coffee & Study Space')
@section('description', 'HIBYRA adalah coffee and study space di Surabaya—tempat menikmati kopi, makanan, dan waktu fokus bersama teman.')

@section('content')
    <section class="about-hero page-wrap">
        <div class="about-hero-copy"><div class="eyebrow"><span class="eyebrow-line"></span> Cerita di balik ruang fokus</div><h1>Good ideas<br>need room<br>to <em>happen.</em></h1><p class="about-lead">HIBYRA adalah coffee & study space di Surabaya: tempat untuk membuka laptop, mengisi tenaga, dan menyelesaikan banyak hal.</p><a class="text-link" href="#our-story">Cerita kami <span aria-hidden="true">↓</span></a></div>
        <div class="about-hero-image"><img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?auto=format&fit=crop&w=1500&q=85" alt="Suasana coffee house HIBYRA dengan cahaya alami" fetchpriority="high"><span class="image-caption">A seat saved just for you.</span></div>
        <div class="about-aside-note">COFFEE<br>STUDY<br>SURABAYA</div>
    </section>

    <section class="story-section page-wrap" id="our-story">
        <div class="story-image-wrap"><img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=1200&q=85" alt="Barista menyiapkan kopi dengan penuh perhatian" loading="lazy"><span class="story-stamp">slow<br>moments</span></div>
        <div class="story-copy"><span class="eyebrow">Why HIBYRA</span><h2>Not just a cafe.<br>Your <em>second desk.</em></h2><p>Kami ingin menghadirkan tempat yang nyaman untuk mengerjakan tugas tanpa merasa dikejar waktu. Datang sendiri, belajar bareng teman, atau lanjut kerja setelah kelas—pilih sudut yang pas dan mulai dari sana.</p><p>Kopi dan makanan dibuat supaya kamu bisa tetap fokus dan bertenaga. Sementara Wi-Fi, colokan, dan pilihan area duduk mendukung setiap cara kamu bekerja.</p><a class="button button-dark" href="/visit">Lihat ruang kami <span aria-hidden="true">↗</span></a></div>
    </section>

    <section class="values-section"><div class="values-inner page-wrap"><div class="values-heading"><span class="eyebrow">What matters here</span><h2>Study well.<br><em>Eat well.</em></h2></div><div class="value-item"><span class="value-number">01</span><h3>Space to focus</h3><p>Wi-Fi, colokan, dan pilihan tempat duduk untuk belajar atau bekerja.</p></div><div class="value-item"><span class="value-number">02</span><h3>Food beyond snacks</h3><p>Menu kopi, rice bowl, pasta, dan camilan untuk sesi yang lebih panjang.</p></div><div class="value-item"><span class="value-number">03</span><h3>Made for community</h3><p>Ruang untuk kerja sendiri, diskusi kelompok, atau bertemu teman baru.</p></div></div></section>

    <section class="about-closer page-wrap"><div class="closer-image"><img src="https://images.unsplash.com/photo-1521017432531-fbd92d768814?auto=format&fit=crop&w=1400&q=85" alt="Meja kafe yang nyaman untuk menghabiskan waktu" loading="lazy"></div><div class="closer-copy"><span class="eyebrow">Bring your next big idea</span><h2>We’ll save<br>you a <em>seat.</em></h2><p>Bawa laptop, catatan, atau teman satu kelompok. Siapkan tugasmu, sisanya biar kami bantu dengan kopi dan makanan.</p><a class="text-link" href="/visit">Cari tahu cara menuju ke sini <span aria-hidden="true">↗</span></a></div></section>
@endsection
