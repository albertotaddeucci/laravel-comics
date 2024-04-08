
@extends('layouts/app')


@section('content')

<main id="home">
    <div id="jumbo"></div>
    <div class="container">
        
    </div>
    <div class="comics-container">

        <div class="container">

            <div class="comics">
                <div class="current">
                    <span>CURRENT SERIES</span>
                </div>
        
                @foreach ($comics as $comicItem)
                    
                <div class="comic">
                    <div>
                        <img src="{{$comicItem['thumb']}}" alt="">
                    </div>
                    <span>
                        {{ $comicItem['title'] }}
                    </span>
    
                </div>
                @endforeach
                               
        
            </div>
        </div>
    
        <button>Load More</button>
    </div>
    
</main>


@endsection