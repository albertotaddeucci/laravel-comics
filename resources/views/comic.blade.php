
@extends('layouts/app')


@section('content')
<style>
    .price{
        background-color: #55ba59;
        strong{
            color: white
        }
        span{
            color: #b9ff8a;
        }
        
        
    }
</style>

<div class="blu-line">

</div>

<div class="container">
    <div class="row">
        <div class="col-8 mt-5">
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
            adv
        </div>

    </div>
</div>


@endsection