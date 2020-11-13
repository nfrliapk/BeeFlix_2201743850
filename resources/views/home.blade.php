@extends('welcome')

@section('style')
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
@endsection

@section('content')
    <h2 class="mx-2" style="color: white">Home</h2>
    @foreach ($movies as $genre => $value)
        <div>
            <h3 class="mt-5 text-center" style="color: white"> {{ $genre }} </h3>

            <div class="d-flex flex-row">
                @foreach ($value as $attr)
                <div class="mx-2 text-center">
                    <img src="{{asset("assets/$attr->photo")}}" alt="" style="width:250px; height:420px;"><br/>
                    <div class="m-2" style="color: white">
                        {{ $attr->title }} <br/>
                    </div>
                    <a class="btn btn-dark btn-block" href="/detail/{{$attr->id}}">LIHAT FILM</a>
                </div>
                @endforeach
                
            </div>
        </div>
        
    @endforeach
@endsection()