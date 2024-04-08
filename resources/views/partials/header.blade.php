<header>
    <div class="banner py-1">
        <div class="container">
            <span class="me-3">DC POWER VISA</span>
            <span>ADDITIONAL DC SITES</span>

        </div>
    </div>
    
    <nav>
        
        <div class="container">
    
            <div>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>
            <div>
                <ul class="m-0">
                    @foreach ($navLinks as $link)
                        
                    <li>    
                        <a href="">{{$link}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
    
        </div>
    
    </nav>

    <div id="jumbo"></div>

</header>
