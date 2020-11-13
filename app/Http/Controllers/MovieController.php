<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Episode;

class MovieController extends Controller
{
    public function home(){
        $dramas = Movie::all()->where('genre_id', 1);
        $kids = Movie::all()->where('genre_id', 2);
        $tvShows = Movie::all()->where('genre_id', 3);
        $movies = [
            "Drama" => $dramas,
            "Kids" => $kids,
            "TV Show" => $tvShows,
        ];
        return view('home')->with('movies',$movies);
    }

    public function detail($movieId){
        $detail = Movie::find($movieId);
        $episodes = Episode::where('movie_id',$movieId)->paginate(3);
    
        return view('detail')->with('detail',$detail)->with('episodes',$episodes);
    }

    public function category(Request $request){
        if($request->type === 'drama'){
            $result = Movie::where('genre_id', 1)->get();
        }else if($request->type === 'kids'){
            $result = Movie::where('genre_id', 2)->get();
        }else if($request->type === 'tvshows'){
            $result = Movie::where('genre_id', 3)->get();
        }
        return view('category')->with('result',$result);
    }
}
