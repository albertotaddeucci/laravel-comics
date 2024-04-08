<header>
    
    <nav>
        <div class="container">
    
            <div>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>
            <div>
                <ul>
                    @foreach ($navLinks as $link)
                        
                    <li>    
                        <a href="">{{$link}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
    
        </div>
    
    </nav>

</header>
