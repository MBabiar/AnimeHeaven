<x-app-layout>
    {{-- Homepage Logo --}}
    <div class="homepage_logo">
        <img src="{{ asset('images/homepage_logo.png') }}" class="img-fluid bg-light" alt="Logo" />
    </div>

    {{-- Products --}}
    <h1 class="text-center my-5">Top produkty</h1>
    <div class="row products container-fluid">
        @foreach ($products as $product)
            <div class="col-xl-3 col-lg-4 col-md-6 col-6 mb-3">
                <div class="card">
                    <a href="{{ route('product.show', ['product_id' => $product->id]) }}">
                        <img src="{{ asset(optional($product->images->first())->image) }}" class="card-img-top"
                            alt="..." />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $product->name }}
                        </h5>
                        <p class="card-text">Cena: {{ $product->price }}€</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
