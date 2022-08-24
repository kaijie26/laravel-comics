<section class="section-series">
    <div class="container">
        {{-- Wrapper --}}
        <div class="series-card-wrapper">
            @foreach ($dc_array as $series_array)
                
                @foreach ($series_array as $single_serie)
                    {{-- Single-Card --}}
                    <div class="card">
                        <img src="{{ $single_serie['thumb'] }}" alt="{{ $single_serie['series'] }}">
                        <h3>{{ $single_serie['series'] }}</h3>

                    </div>
                    
                @endforeach

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

