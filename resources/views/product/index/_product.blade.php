<div class="single-products">
    <a href="{{ route('product.show', $product) }}">{{ $product->name }}</a>
    <a class="img-product" href="#"> <img @if($product->hasImage())
        src="{{ $product->getThumbnailUrl() }}"
        @else
        src="/images/product.jpg"
        @endif
        alt="{{ $product->name }}" /></a>
    <div class="price-product">
        <div>
            <p class="sale-price">{{ format_price($product->price) }}</p>
            <p class="normal-price">900$</p>
        </div>
    </div>

    <div class="btn-container">
        <button class=" btn-product addCart-btn">Add to Cart</button>
        <button class=" btn-product detailes-btn">Detailes</button>
    </div>

</div>