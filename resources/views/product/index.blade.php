@push('scripts')
    @vite(['resources/js/products/index.js'])
@endpush
<x-app-layout>
    {{-- Filter --}}
    <div class="container-fluid navbar navbar-expand-md justify-content-center mt-1 products-nav">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            Spresniť parametre
            <span class="navbar-toggler-icon"></span>
        </button>
        <form action="{{ route('product.index', ['category' => request('category')]) }}" method="GET"
            class="navbar-collapse collapse row m-0" id="navbarSupportedContent">
            @csrf
            @if (request('sort'))
                <input type="hidden" name="sort" value="{{ request('sort') }}">
            @endif
            {{-- Price --}}
            <div class="filter-price">
                <div class="row mx-0 my-1">
                    <input type="number" id="price_min" min="0" name="price_min"
                        value="{{ request('price_min') ?? 0 }}" class="filter-price-input" />
                    <span class="dash-separator">-</span>
                    <input type="number" id="price_max" min="0" name="price_max"
                        value="{{ request('price_max') ?? 100 }}" class="filter-price-input" />
                </div>
                <div class="row mx-0 my-1">
                    <div class="range-slider">
                        <input class="range-slider-part" id="range-slider-min" type="range" min="0"
                            max="100" value="{{ request('price_min') ?? 0 }}" />
                        <input class="range-slider-part" id="range-slider-max" type="range" min="0"
                            max="100" value="{{ request('price_max') ?? 100 }}" />
                    </div>
                </div>
            </div>
            {{-- Anime --}}
            <div class="filter-selectable-list">
                <select class="form-select filter-row-other" id="anime" name="anime">
                    <option value="" {{ request('anime') === '' ? 'selected' : '' }} hidden>Anime</option>
                    <option value="Naruto" {{ request('anime') === 'Naruto' ? 'selected' : '' }}>Naruto</option>
                    <option value="Bleach" {{ request('anime') === 'Bleach' ? 'selected' : '' }}>Bleach</option>
                    <option value="Death Note" {{ request('anime') === 'Death Note' ? 'selected' : '' }}>Death Note
                    </option>
                </select>
            </div>
            {{-- Color --}}
            <div class="filter-selectable-list">
                <select class="form-select filter-row-other" id="color" name="color">
                    <option value="" {{ request('color') === '' ? 'selected' : '' }} hidden>Farba</option>
                    <option value="black" {{ request('color') === 'black' ? 'selected' : '' }}>Čierna</option>
                    <option value="white" {{ request('color') === 'white' ? 'selected' : '' }}>Biela</option>
                    <option value="blue" {{ request('color') === 'blue' ? 'selected' : '' }}>Modrá</option>
                </select>
            </div>
            {{-- Submit Button --}}
            <button type="submit" class="filter-col-btn filter-row-btn">Filtruj</button>
        </form>
    </div>

    {{-- Sort --}}
    <div class="container-fluid">
        <div class="row products-nav-2 mt-1 mb-1">
            <form method="GET" action="{{ route('product.index', ['category' => request('category')]) }}"
                class="p-0">
                @csrf
                @foreach (request()->except('category', 'page', 'sort') as $name => $value)
                    <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                @endforeach

                <button type="submit" name="sort" value=""
                    class="button-order {{ request('sort') === null ? 'button-active' : '' }}">Top</button>
                <button type="submit" name="sort" value="price_asc"
                    class="button-order {{ request('sort') === 'price_asc' ? 'button-active' : '' }}">Najlacnejšie</button>
                <button type="submit" name="sort" value="price_desc"
                    class="button-order {{ request('sort') === 'price_desc' ? 'button-active' : '' }}">Najdrahšie</button>
            </form>
        </div>
    </div>

    {{-- Products --}}
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

    {{-- Pagination --}}
    {{ $products->links('pagination::bootstrap-5') }}
</x-app-layout>
