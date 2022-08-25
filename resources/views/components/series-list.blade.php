<section class="section-series">
    <div class="container">
        {{-- Wrapper --}}
        <div class="series-card-wrapper">
            @foreach ($dc_array as $serie)
            
                {{-- Single-Card --}}
                <div class="card">
                    <img src="{{ $serie['thumb'] }}" alt="{{ $serie['series'] }}">
                    <h3>{{ $serie['series'] }}</h3>

                </div>

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

