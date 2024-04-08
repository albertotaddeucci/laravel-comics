<footer>

    <div class="wrapper">

        <div class="link-lists">
            <div class="row">

            </div>
            @foreach ($lists as $listItem)
            <div class="lists">
                <h3>{{ $listItem['title'] }}</h3>
                <ul>
                    @foreach ($listItem['links'] as $listItemLink)
                    <li >{{ $listItemLink }}</li>

                    @endforeach


                </ul>


            </div>
            @endforeach


        </div>
        
        
        <div>
            
            <img id="logo-bg" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
        </div>
        
        
    </div>
    
    
    
</footer>
<div id="footer-bottom">
    <div class="wrapper">


        <div>
            <button>SIGN-UP NOW!</button>
        </div>
        <div class="follow-us">
            <div>FOLLOW US</div>
            <div>
                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="">
            </div>
            <div>
                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="">

            </div>
            <div>
                <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="">

            </div>
            <div>
                <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="">

            </div>
            <div>
                <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">

            </div>
        </div>
    </div>


</div>