<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function register() {
        return "register page";
    }

    public function login() {
        return "login page";
    }

    public function product() {
        $products = ['name' => 'iphone', 'price' => 700];
        return view('home', compact('products'));
    }

    public function create() {
        //show the form
        return view('product.create');
    }

    public function store(Request $request) {
        // submit the form
        // dd($request->get('title'));

        $this->validate(request(), [
            'title' => 'required|min:3|max:20',
            'description' => 'required|min:5'
        ]);
        dd(request('title'));
    }
}