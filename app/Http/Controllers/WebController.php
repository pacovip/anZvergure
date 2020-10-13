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




    /**
     * Show the website private-sector page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function privatesector()
    {
        return view('privatesector', compact('data'));
    }

    /**
     * Show the website public-sector page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function publicsector()
    {
        return view('publicsector', compact('data'));
    }



    /**
     * Show the website offeradministrative page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function offeradministrative()
    {
        return view('offeradministrative', compact('data'));
    }

    /**
     * Show the website offermanagement page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function offermanagement()
    {
        return view('offermanagement', compact('data'));
    }

    /**
     * Show the website offerproject page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function offerproject()
    {
        return view('offerproject', compact('data'));
    }

    /**
     * Show the website offerhr page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function offerhr()
    {
        return view('offerhr', compact('data'));
    }

    /**
     * Show the website offerpayroll page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function offerpayroll()
    {
        return view('offerpayroll', compact('data'));
    }

}
