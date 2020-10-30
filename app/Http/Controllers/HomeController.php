<?php

namespace App\Http\Controllers;
use App\Artikel;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('admin')->with('artikels', $user->artikels);
    }
    
    public function gmaps()

    {

    	$locations = DB::table('locations')->get();

    	return view('gmaps',compact('locations'));

    }
}
