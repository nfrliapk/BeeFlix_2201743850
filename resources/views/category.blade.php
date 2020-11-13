@extends('welcome')

@section('style')
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
@endsection

@section('content')
    <h2 class="mt-3 mx-2" style="text-transform:uppercase; color: white;">{{ app('request')->input('type') }}</h2>

    <div class="mt-2 d-flex flex-row">
        @foreach ($result as $attr)
            <div class="mx-2 mt-3 text-center">
                <img src="{{asset("assets/$attr->photo")}}" alt="" style="width:250px; height:420px;"><br/>
                <div class="m-2" style="color: white">
                    {{ $attr->title }} <br/>
                </div>
                <a class="btn btn-dark btn-block" href="/detail/{{$attr->id}}">LIHAT FILM</a>
            </div>
        @endforeach
    </div>

@endsection()