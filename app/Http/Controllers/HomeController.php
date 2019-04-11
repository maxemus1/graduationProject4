<?php

namespace App\Http\Controllers;

use App\Model\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    const  PRODUCTS_PER_PAGE = 12;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::paginate(self::PRODUCTS_PER_PAGE);
        return view('home', ['products' => $products]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function aboutСompany()
    {
        return view('layouts.about_company');
    }
}
