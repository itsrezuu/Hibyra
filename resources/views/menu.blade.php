@extends('layouts.store')

@section('title', 'Menu Kopi & Makanan — HIBYRA Surabaya')
@section('description', 'Menu lengkap HIBYRA: kopi, minuman non-kopi, rice bowl, pasta, camilan, dan pastry untuk teman nugas di Surabaya.')

@section('content')
    <section class="collection-intro page-wrap">
        <div class="eyebrow"><span class="eyebrow-line"></span> Coffee · meals · snacks</div>
        <h1>Eat well.<br><em>Work happy.</em></h1>
        <p>Menu lengkap buat nemenin waktu produktifmu—kopi untuk mulai, makanan berat untuk isi tenaga, dan camilan untuk lanjut fokus.</p>
        <a class="text-link" href="#all-menu">Lihat menu <span aria-hidden="true">↓</span></a>
    </section>

    <section class="catalog-section page-wrap" id="all-menu">
        <div class="catalog-heading"><div><span class="eyebrow">From our bar & kitchen</span><h2>Good things, <em>daily.</em></h2></div><span class="catalog-count">Coffee · Rice bowl · Pasta · Snack</span></div>
        <div class="filter-row" role="group" aria-label="Filter kategori menu">
            <button class="filter-chip is-selected" type="button" data-filter="all" aria-pressed="true">Semua menu</button>
            <button class="filter-chip" type="button" data-filter="coffee" aria-pressed="false">Coffee</button>
            <button class="filter-chip" type="button" data-filter="meal" aria-pressed="false">Makanan berat</button>
            <button class="filter-chip" type="button" data-filter="noncoffee" aria-pressed="false">Non-coffee</button>
            <button class="filter-chip" type="button" data-filter="snack" aria-pressed="false">Snack & bakery</button>
        </div>
        <div class="menu-grid catalog-grid">
            @foreach ($products as $product)
                <div class="catalog-item" id="{{ $product->slug }}">@include('partials.menu-card', ['product' => $product])</div>
            @endforeach
        </div>
        <p class="menu-footnote"><span aria-hidden="true">✳</span> Menu dan harga dapat berubah. Tanyakan pilihan terbaru, level pedas, dan alergi makanan kepada tim kami.</p>
    </section>

    <section class="discovery-banner"><div class="discovery-copy"><span class="eyebrow eyebrow-light">Pair it with a productive day</span><h2>Stay for lunch.<br>Leave with <em>ideas.</em></h2><p>Datang untuk kopi, nikmati makan siang, lalu lanjutkan tugas di tempat yang sama.</p><a class="button button-light" href="/visit">Lihat fasilitas & lokasi <span aria-hidden="true">↗</span></a></div><div class="discovery-image" role="img" aria-label="Makanan dan minuman tersaji di meja kafe"></div></section>
@endsection
