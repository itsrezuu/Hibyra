@extends('layouts.store')

@section('title', 'Tempat Nugas di Surabaya — HIBYRA Coffee & Study Space')
@section('description', 'Cari tempat nyaman untuk nugas di Surabaya. HIBYRA punya Wi-Fi, colokan, menu makanan, dan meja untuk belajar sendiri atau kelompok.')

@section('content')
    <section class="visit-intro page-wrap">
        <div class="eyebrow"><span class="eyebrow-line"></span> Your study spot in Surabaya</div>
        <h1>Bring your work.<br><em>We’ll fuel it.</em></h1>
        <p>Butuh tempat nugas, kerja remote, atau diskusi kelompok? HIBYRA menyiapkan ruang nyaman, koneksi internet, colokan, kopi, dan makanan.</p>
    </section>

    <section class="visit-feature page-wrap">
        <div class="visit-photo"><img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1600&q=90" alt="Ruang kerja bersama dengan meja panjang dan cahaya alami" fetchpriority="high"></div>
        <div class="visit-details">
            <div class="visit-detail-block"><span class="eyebrow">Find us</span><h2>HIBYRA<br>Coffee & Study Space</h2><p>Surabaya, Jawa Timur<br>Hubungi kami untuk alamat dan petunjuk arah.</p><a class="text-link" href="mailto:halo@hibyra.id?subject=Lokasi%20HIBYRA">Tanyakan lokasi lengkap <span aria-hidden="true">↗</span></a></div>
            <div class="visit-detail-block"><span class="eyebrow">Space to focus</span><h3>Stay a little longer</h3><p>Wi-Fi untuk belajar dan kerja remote<br>Colokan di area duduk<br>Sudut fokus dan meja diskusi<br>Kopi, rice bowl, pasta, dan camilan</p></div>
            <div class="visit-detail-block"><span class="eyebrow">Opening hours</span><h3>Every day</h3><p>08.00—21.00 WIB</p></div>
            <div class="visit-detail-block" id="reservasi"><span class="eyebrow">Let’s make a plan</span><h3>Coming with a group?</h3><p>Untuk diskusi kelompok, reservasi meja, atau acara kecil, hubungi kami lebih dulu.</p><a class="button button-dark" href="mailto:halo@hibyra.id?subject=Reservasi%20HIBYRA">Hubungi HIBYRA <span aria-hidden="true">↗</span></a></div>
        </div>
    </section>

    <section class="visit-bottom page-wrap"><span class="visit-sparkle" aria-hidden="true">✳</span><div><span class="eyebrow">A little reminder</span><h2>Good coffee is<br>better <em>shared.</em></h2></div><a class="text-link" href="/menu">Lihat menu makanan & minuman <span aria-hidden="true">↗</span></a></section>
@endsection
