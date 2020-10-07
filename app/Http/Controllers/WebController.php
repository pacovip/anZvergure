<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public $data = null;
    /**
     * Show the website home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', compact('data'));
    }



    /**
     * Show the website fields page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function aboutus()
    {
        return view('aboutus', compact('data'));
    }

    /**
     * Show the website experts page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function consultant()
    {
        return view('consultant', compact('data'));
    }

    /**
     * Show the website policy page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function policy()
    {
        return view('policy', compact('data'));
    }

    /**
     * Show the website contacts page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('contact', compact('data'));
    }

}
