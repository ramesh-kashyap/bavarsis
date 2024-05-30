<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view('main.home');
    }

    public function referral()
    {
        return view('main.referralhub');
    }

    public function learning()
    {
        return view('main.learninghub');
    }

    public function documents()
    {
        return view('main.documents');
    }
    public function bonus()
    {
        return view('main.bonushub');
    }
   
    public function showroom()
    {
        return view('main.showroom');
    }

    public function news()
    {
        return view('main.news');
    }
    public function ambassador()
    {
        return view('main.ambassador');
    }

    public function reservehub()
    {
        return view('main.reservehub');
    }
    public function faq()
    {
        return view('main.faq');
    }



}
