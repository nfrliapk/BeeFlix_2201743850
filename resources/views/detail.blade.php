@extends('welcome')

@section('content')
    <h2 class="mx-2" style="color: white">Detail</h2>
    
    <div class="d-flex mt-3 justify-content-center">
        <div class="card bg-light mb-3 p-3">
            <img src="{{asset("assets/$detail->photo")}}" alt="" style="width:250px; height:420px;"><br/>
        </div>

        <div class="card bg-light ml-3 mb-3 p-3">
            <div class="text-wrap" style="width: 60rem;">

            <div class="card-header bg-light">
                <h1>{{$detail->title}}</h1>
            </div>

            <div class="card-body bg-light">
                <h5>{{$detail->desc}}</h5>
                <h6>
                    Kategori    : {{$detail->genre->name}}<br/>
                    Rating      : {{$detail->rating}}
                </h6>
                <hr>
                @foreach ($episodes as $item)
                    <div>{{$item->episode}}</div>
                    <div>{{$item->title}}</div>
                    <hr>
                @endforeach

                {{$episodes->links()}}
            </div>     

        </div>
    </div>
    

@endsection()