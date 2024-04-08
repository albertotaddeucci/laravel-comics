
@extends('layouts/app')


@section('content')

<div id="comic">

    

    <div class="blu-line">
        <div class="container">
            <img src="{{$comics[0]['thumb']}}" alt="">

        </div>
    </div>
    
    <div class="container">
        <div class="row my-5 justify-content-between ">
              <div class="col-7 ">
                <h2 class="text-uppercase">{{$comics[0]['title']}}</h2>
                <div class="row price my-3">
                    <div class="col-8 p-3">
                        <div class="row">
                            <div class="col-8">
                                <Span>U.S. Price:</Span> <strong>{{$comics[0]['price']}}</strong>
    
                            </div>
                            <div class="col-4 available">
                                <span class="fw-bold">AVAILABLE</span> 
                            </div>
    
                        </div>
                    </div>
                    <div class="col-4 border-start border-black  p-3 text-center ">
                        <strong>Check Availability</strong> 
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas expedita et excepturi sequi magni id porro quas modi non aliquid dolores, eaque, quam molestias deserunt. Dolores pariatur nemo adipisci labore.
                    Magni pariatur aliquam nemo provident incidunt sequi vitae quae iusto, ex nesciunt aspernatur laborum suscipit inventore? Corrupti libero temporibus non aspernatur autem minus expedita, soluta quo reiciendis distinctio officia explicabo.
                    Vero accusantium, enim totam praesentium amet possimus maxime dolore laborum animi repudiandae voluptatum id alias, assumenda nemo sit quae ut facilis labore veniam nisi tempora illum tenetur ex. Eos, reprehenderit.
                </p>
            </div>
            <div class="col-4">
                <div class="row">

                    <div class="text-end fw-bold ">ADVERTISEMENT</div>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                </div>
            </div>
    
        </div>
    </div>
    
    <div id="specs" class="pt-3 bg-body-tertiary">
        <div class="container ">
            <div class="row pb-5">
                <div class="col-6">
                    <h3 class="pb-2">Talent</h3>
                    <div class="row border-top border-bottom py-2">
                        <div class="col-4">Art by:</div>
                        <div class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam aut possimus a odio excepturi rem nobis illum, tempore blanditiis dolores iure ducimus reiciendis eveniet, cum, eius voluptates fuga repellat porro.</div>
    
                    </div>
                    <div class="row border-bottom py-2">
                        <div class="col-4">Written by:</div>
                        <div class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam aut possimus a odio excepturi rem nobis illum, tempore blanditiis dolores iure ducimus reiciendis eveniet, cum, eius voluptates fuga repellat porro.</div>
    
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="pb-2">Specs</h3>
                    <div class="row border-top py-2">
                        <div class="col-4">Series:</div>
                        <div class="col-8">ACTION COMICS</div>
    
                    </div>
                    <div class="row border-top  py-2">
                        <div class="col-4">U.S. Price:</div>
                        <div class="col-8">{{$comics[0]['price']}}</div>
    
                    </div>
                    <div class="row border-top border-bottom py-2">
                        <div class="col-4">On Sale Date:</div>
                        <div class="col-8">{{$comics[0]['sale_date']}}</div>
    
                    </div>
                </div>
            </div>
    
        </div>

        <div id="tile" class="border-top mt-5 ">
            <div class="row align-items-center justify-content-center m-0 ">
                @foreach ($cards as $cardItem)
                <div class="col-auto align-self-stretch  border border-top-0">
                    <div class="row p-3">
                        <div class="col-8">
                            {{ $cardItem['text'] }}
                        </div>
    
                        <div class="col-4 ">
                            <img  src="{{ Vite::asset('resources' . $cardItem['image'] ) }}" alt="">
                        </div>
                    </div>
    
                </div>
                @endforeach
               
    
            </div>
        </div>
    </div>
</div>



@endsection