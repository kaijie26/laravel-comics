<section class="section-series">
    <div class="container">
        {{-- Wrapper --}}
        <div class="series-card-wrapper">
            @foreach ($dc_array as $serie)
            
                {{-- Single-Card --}}
                <a href="{{ route('single-serie', ['id' => $serie['id']]) }}" class="card">
                    <img src="{{ $serie['thumb'] }}" alt="{{ $serie['series'] }}">
                    <h3>{{ $serie['series'] }}</h3>

                </a>

            @endforeach
            
        </div>
        
        {{-- btn --}}
       <div class="btn">
            <button>
                LOAD MORE
            </button>
       </div>

    </div>
</section>

