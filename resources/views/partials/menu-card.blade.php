<article class="menu-card" data-menu-category="{{ $product->category->slug }}">
    <a class="menu-card-image" href="/menu#{{ $product->slug }}" aria-label="Lihat {{ $product->name }}">
        <img src="{{ $product->image_url }}" alt="{{ $product->image_alt }}" loading="lazy">
        @if ($product->tag)<span class="menu-card-tag">{{ $product->tag }}</span>@endif
        <span class="menu-card-arrow" aria-hidden="true">↗</span>
    </a>
    <div class="menu-card-info">
        <div class="menu-card-copy"><span class="menu-card-category">{{ $product->label }}</span><h3><a href="/menu#{{ $product->slug }}">{{ $product->name }}</a></h3><p>{{ $product->description }}</p></div>
        <span class="menu-card-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
    </div>
</article>
