<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use App\Reel;
use App\Gallery;
use App\Photo;
use App\Mail\DemoEmail;

class HomeController extends Controller
{
    
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function construccion()
    {
        return view('construccion');
    }
    public function index()
    {
        $reel = Reel::orderBy('id','desc')->take(3)->get();
        return view('index', ['reel' => $reel]);
    }

    public function send(Request $request)
    {
        return view('send', [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'text' => $request->input('text')
        ]);
    }

    public function gallery()
    {
        $galleries = Gallery::orderBy('id','desc')->get();
        return view('gallery', ['galleries' => $galleries]);
    }

    public function viewGallery($id)
    {
        $gallery = Gallery::find($id);
        $photos = Photo::where('gallery_id', $id)->orderBy('id','desc')->paginate(12);
        return view('gallery-view', [
            'photos' => $photos,
            'gallery' => $gallery
        ]);
    }

    public function contacto()
    {
        return view('contacto');
    }
    public function reel()
    {
        return view('reel');
    }

    public function about()
    {
        return view('about');
    }
        public function cv()
        {
            return Redirect::to(URL::previous() . "#cv");
        }

        public function values()
        {
            return Redirect::to(URL::previous() . "#values");
        }
        public function facts()
        {
            return Redirect::to(URL::previous() . "#facts");
        }
        public function certificates()
        {
            return Redirect::to(URL::previous() . "#certificates");
        }
}
