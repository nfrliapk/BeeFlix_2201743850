<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BeeFlix</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        @yield('style')


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


    </head>
    <body style="background-color: black">

        <span style="color: skyblue; font-size: 50px;">Bee</span>
        <span style="color: white; font-size: 50px;">Flix</span><br/>


        <a href="{{url()->previous()}}" class="mx-2 btn btn-light">&laquo; Kembali</a>
        <a href="/" class="mx-2 btn btn-light">Lihat Semua Film</a>
        
            <a class="mx-2 btn btn-light dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Category
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a href="/category?type=drama" class="dropdown-item">Drama</a>
              <a href="/category?type=kids" class="dropdown-item">Kids</a>
              <a href="/category?type=tvshows" class="dropdown-item">TV Shows</a>
            </div>
        

        
            <div>
                @yield('content')
            </div>
    </body>
</html>
