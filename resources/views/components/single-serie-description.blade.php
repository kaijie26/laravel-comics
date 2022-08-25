<section>
    {{-- Poster-Area --}}
    <div class="poster-area">
        <div class="serie-container">
            {{-- Poster --}}
            <div class="poster">
                <img src="{{ $current_serie['thumb'] }}" alt="">
    
            </div>
    
        </div>

    </div>

    {{-- Serie-Content --}}
    <div class="serie-content">
        <div class="serie-container">
            {{-- Wrapper --}}
            <div class="serie-content-wrapper">
                {{-- Serie-General-Description --}}
                <div class="serie-description">
                    <h1>{{ $current_serie['title'] }}</h1>
                    {{-- Avaible-Bar --}}
                    <div class="avaible-bar">
                        <div class="bar-container">
                            <div>
                                U.S. Price: {{ $current_serie['price'] }}
                            </div>
    
                            <div>
                                AVAIBLE

                            </div>

                            <div>
                                Check Availability
                            </div>

                        </div>


                    </div>
                    {{-- Serie-Description-Text   --}}
                    <p>
                        {{ $current_serie['description'] }}
                    </p>
                </div>

                {{-- Advertisement --}}
                <div class="advertisement">
                    <div>
                        advertisement
                    </div>
                    <img src="{{ asset('img/adv.jpg') }}" alt="">

                </div>


            </div>

        </div>
    
    </div>

    {{-- More-Info-Abot-Serie  --}}
    <div class="more-info">
        <div class="serie-container">
            {{-- Wrapper --}}
            <div class="info-wrapper">
                {{-- Left-Col-Description --}}
                <div class="left-col">
                    <h2>Talent</h2>

                    <div class="info-container">
                        <div>
                            Art by:
                        </div>

                        @foreach($current_serie['artists'] as $artist)
                            <div class="color-blue" >
                                {{ $artist }}
                            </div>
                        
                        @endforeach
                            
                    </div>

                    <div class="info-container">
                        <div>
                            Written by:
                        </div>

                        @foreach($current_serie['writers'] as $writer)
                            <div class="color-blue">
                                {{ $writer }}
                            </div>
                    
                        @endforeach

                    </div>
                    
                </div>
                {{-- RIght-Col-Description --}}
                <div class="right-col">
                    <h2>Specs</h2>

                    <div class="info-container">
                        <div>
                            Series:
                        </div>
        
                        <div class="color-blue" >
                            {{ $current_serie['series'] }}
                        </div>
                            
                    </div>

                    <div class="info-container">
                        <div>
                            U.S. Price:
                        </div>
            
                        <div>
                            {{ $current_serie['price'] }}
                        </div>

                    </div>

                    <div class="info-container">
                        <div>
                            On Sale Date:
                        </div>
            
                        <div>
                            {{ $current_serie['sale_date'] }}
                        </div>

                    </div>
                    
                </div>
                
            </div>

        </div>
        

    </div>

</section>